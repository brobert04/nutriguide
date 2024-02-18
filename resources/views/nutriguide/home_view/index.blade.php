@extends('nutriguide.home_view.base')
@section('content')
    <!-- Feature list -->
    <div class="container pt3 mt2 text--gray align--center">
        <p class="mb3">Great for companies with up to 100&nbsp;employees.</p>
        <div class="grid-row">
            <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                <img class="illustration--small mb1" src="{{asset('../assets/img/assign.svg')}}" alt="Assign to others">
                <p>Assign to others</p>
            </div>
            <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                <img class="illustration--small mb1" src="{{asset('../assets/img/connected.svg')}}" alt="Stay connected">
                <p>Stay connected</p>
            </div>
            <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                <img class="illustration--small mb1" src="{{asset('../assets/img/search.svg')}}" alt="Powerful search">
                <p>Powerful search</p>
            </div>
            <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">a
                <img class="illustration--small mb1" src="{{asset('../assets/img/vault.svg')}}" alt="Put in a vault">
                <p>Put in a vault</p>
            </div>
            <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                <img class="illustration--small mb1" src="{{asset('../assets/img/messaging.svg')}}" alt="Fast messaging">
                <p>Fast messaging</p>
            </div>
            <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                <img class="illustration--small mb1" src="{{asset('../assets/img/mail.svg')}}" alt="Share with others">
                <p>Share with others</p>
            </div>
        </div>
    </div>

    <!-- Focus -->
    <div class="container--lg pt1 pb1">

        <div class="grid-row grid-row--center">
            <div class="grid-column mt3 mb2 order-2">
                <div class="border--bottom pb2 mb2">
                    <h2>Usage data</h2>
                    <p>Quis istud possit, inquit, negare? Videamus animi partes, quarum est conspectus illustrior; Illa sunt similia: hebes acies est cuipiam oculorum, corpore alius senescit; Non enim, si omnia non&nbsp;sequebatur.</p>
                </div>
                <p class="italic text--gray mb1">Quae quo sunt excelsiores, eo dant clariora indicia naturae. Causa autem fuit huc veniendi ut quosdam&nbsp;hinc.</p>
                <p class="bold">Carry Andersen, COO at&nbsp;Stripe</p>
            </div>
            <div class="grid-column span-1"></div>
            <div class="grid-column mt3 mb2 order-1 reveal-on-scroll is-revealing">
                <img src="{{asset('../assets/img/data.svg')}}" alt="Usage data">
            </div>
        </div>

        <div class="grid-row grid-row--center">
            <div class="grid-column mt3 mb2 reveal-on-scroll is-revealing">
                <img src="{{asset('../assets/img/security.svg')}}" alt="Absolute security">
            </div>
            <div class="grid-column span-1"></div>
            <div class="grid-column mt3 mb2">
                <div class="border--bottom pb2 mb2">
                    <h2>Absolute security</h2>
                    <p>Itaque his sapiens semper vacabit. Qualis ista philosophia est, quae non interitum afferat pravitatis, sed sit contenta mediocritate vitiorum? Quid de Platone aut de Democrito loquar? Quis istud possit, inquit&nbsp;negare?</p>
                </div>
                <p class="italic text--gray mb1">Estne, quaeso, inquam, sitienti in bibendo voluptas? Duo Reges: constructio&nbsp;interrete.</p>
                <p class="bold">Josh Blenton, Product Manager at&nbsp;Blinkist</p>
            </div>
        </div>

    </div>

    <!-- Mentioned -->
    <div class="container--lg pt3 pb3 mb2 align--center">
        <p class="mb2">Mentioned in</p>
        <span class=""><img class="mentioned" src="{{asset('../assets/img/mentioned.svg')}}" alt="New York Times, TC, Product Hunt, Recode"></span>
    </div>
@endsection
