<h1>Commande n°{{$order['no_order']}} !</h1>
<p>Bonjour Admin. </p>
<p>La commande de {{$user['name']}} d'un total de {{$card['total_price']}} euros a bien été passée.</p>


<p>Liste des photos vendues :</p>
@foreach ($card->items as $item)
    <img src="{{$item->image_url}}">
    <br>
    <br>
@endforeach
