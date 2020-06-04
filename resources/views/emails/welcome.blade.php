@component('mail::message')
# Заявка на инвестирование в компанию

<p>Имя: {{ $name }}</p>
<p>Фамилия: {{ $surname }}</p>
<p>Телефон: {{ $phone }}</p>
<p>E-mail: {{ $email }}</p>
<p>Предложения или вопросы: {{ $questions }}</p>
<p>Для компании: {{ $for_company }}</p>


@endcomponent
