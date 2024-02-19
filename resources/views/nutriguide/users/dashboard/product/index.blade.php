@extends('nutriguide.users.dashboard.base')
@section('content')
{{--    <div class="cointainer-fluid pt-4">--}}
{{--        <!-- general form elements -->--}}
{{--        <div class="card card-primary ">--}}
{{--            <!-- form start -->--}}
{{--            <form>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Product Name</label>--}}
{{--                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputPassword1">Scan Barcode</label>--}}
{{--                        <br>--}}
{{--                        <input type="file" accept="image/*" capture="user">--}}

{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputFile">File input</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="custom-file">--}}
{{--                                <input type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
{{--                            </div>--}}
{{--                            <div class="input-group-append">--}}
{{--                                <span class="input-group-text">Upload</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-check">--}}
{{--                        <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                        <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /.card-body -->--}}

{{--                <div class="card-footer">--}}
{{--                    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <!-- /.card -->--}}
{{--    </div>--}}
    <input type="file" accept="image/*" id="image-upload" name="image">
    <button id="scan-button">Scan Barcode</button>
    <div id="barcode-result"></div>
    @section('custom-js')
        <script src="https://cdn.jsdelivr.net/npm/quagga/dist/quagga.min.js"></script>
        <script>
            const imageUpload = document.getElementById('image-upload');
            const scanButton = document.getElementById('scan-button');
            const barcodeResult = document.getElementById('barcode-result');

            // Function to handle file input change event
            imageUpload.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    // Display the selected image
                    const imageURL = URL.createObjectURL(file);
                    const imageElement = document.createElement('img');
                    imageElement.src = imageURL;
                    barcodeResult.innerHTML = '';
                    barcodeResult.appendChild(imageElement);
                    scanButton.disabled = false; // Enable the scan button after selecting an image
                }
            });

            // Function to detect barcode from the image data and send it to the Laravel backend
            function detectBarcode(imageData) {
                Quagga.decodeSingle({
                    src: imageData,
                    numOfWorkers: 0, // Disable worker to prevent cross-origin issues
                    inputStream: {
                        size: 800 // Set image size for better barcode detection (adjust as needed)
                    },
                    decoder: {
                        readers: ['ean_reader'] // Specify barcode type (EAN) to scan
                    },
                    locate: true // Enable barcode localization
                }, function(result) {
                    if (result && result.codeResult) {
                        const barcode = result.codeResult.code;
                        console.log('Barcode detected:', barcode);
                        // Send the detected barcode to the Laravel backend
                        sendBarcodeToBackend(barcode);
                        // Display the detected barcode
                        barcodeResult.innerHTML = `Detected Barcode: ${barcode}`;
                    } else {
                        console.error('No barcode detected');
                        // Display error message if no barcode is detected
                        barcodeResult.innerHTML = 'No barcode detected';
                    }
                });
            }

            // Function to send the detected barcode to the Laravel backend
            function sendBarcodeToBackend(barcode) {
                fetch('{{route('product.scan')}}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token for Laravel CSRF protection
                    },
                    body: JSON.stringify({ barcode: barcode })
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Barcode sent to backend:', data);
                        window.location.href = data.redirect_url;
                        // Handle response from the Laravel backend if needed
                    })
                    .catch(error => console.error('Error sending barcode to backend:', error));
            }

            // Function to handle the scan button click event
            scanButton.addEventListener('click', function() {
                const file = imageUpload.files[0];
                if (file) {
                    // Load the image file as a data URL
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const imageData = event.target.result;
                        detectBarcode(imageData);
                    };
                    reader.readAsDataURL(file);
                }
            });
        </script>

    @endsection
@endsection
