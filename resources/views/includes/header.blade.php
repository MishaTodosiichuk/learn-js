<header class="py-3 border-bottom">
    <div class="d-flex justify-content-between container">
        <div>

            <ul class="list-unstyled d-flex">
                <li class="me-3">
                    <a href="{{route('home')}}">
                        {{config('app.name')}}
                    </a>
                </li>
                <li class="ms-3">
                    <a href="{{route('blog')}}">Статті</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="list-unstyled d-flex">
                <li class="ms-3">
                    <a href="{{route('register')}}">Реєстрація</a>
                </li>
                <li class="ms-3">
                    <a href="{{route('login')}}">Вхід</a>
                </li>
            </ul>
        </div>
    </div>
</header>
