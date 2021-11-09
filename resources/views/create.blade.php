<title>Bericht maken | Transformers Community</title>
<link href="{{ url('/css/create.css') }}" rel="stylesheet">
<link rel="icon" href="image/icontc.png" sizes="32x32" />

<div class="wrapper">
   <div class="title">
      <h1>Schrijf een bericht</h1>
   </div>
   <form action="/create" method="POST">
      @csrf
      <div class="contact-form">
         <div class="input-fields">
            <input type="text" name="user_id" class="input" placeholder="User_id">
            <input type="text" class="input" name="picture" placeholder="Foto url">
         </div>
         <div class="msg">
            <textarea name="content" cols="30" rows="10" placeholder="Bericht"></textarea>
            <button class="btn">Send</button>
         </div>
   </form>
   </div>
   <a href="/" class="close">
</div>