<h1>Commande n°{{$order['no_order']}} !</h1>
<p>Bonjour, {{$user['name']}} </p>
<p>Voici vos/votre superbe.s photo.s achetée.s {{$card['total_price']}} euros.</p>

@foreach ($card->items as $item)
    <img src="{{$item->image_url}}">
    <br>
    <br>
@endforeach
<p>Merci de votre commande</p>


