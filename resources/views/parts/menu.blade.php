{{--<a href="index.html" class="text-white hover:text-pink font-bold">Главная</a>
<a href="catalog.html" class="text-white hover:text-pink font-bold">Каталог товаров</a>
<a href="cart.html" class="text-white hover:text-pink font-bold">Корзина</a>--}}

@foreach($menu as $item)
    <a href="{{ $item->url }}" class="@if($path == $item->url) active @endif text-white hover:text-pink font-bold">{{ $item->name }}</a>
@endforeach
