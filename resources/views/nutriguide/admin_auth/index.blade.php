<h1>Admin Dashboard</h1>


<form action="{{route('admin.logout')}}" method="post">
    @csrf
    <button>Logout</button>
</form>
