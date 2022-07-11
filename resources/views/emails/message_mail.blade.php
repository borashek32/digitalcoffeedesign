@component('mail::message')
<h3 class="text-center">
Новое сообщение на сайте digitalcoffeedesign.com
</h3>
<br>
<br>
<p>Имя: {{ $request['name'] }}</p>
<p>Email: {{ $request['email'] }}</p>
<p>Сообщение: {{ $request['message'] }}</p>

{{-- @component('mail::button', ['url' => 'http://lemma-auto.ru/'])
Перейти на сайт
@endcomponent --}}
@endcomponent

