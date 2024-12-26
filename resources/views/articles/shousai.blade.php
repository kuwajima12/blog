<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
h1{
text-align:center;

}

#zoku{
    margin-left:50px;


}

.mainform{
    width:1000px;
    margin:auto;


}

.card{
    margin:auto;
    margin-top:50px;
margin-bottom:100px;

}


.coment_form{

margin:auto;
    margin-top:50px;
    width:800px;

}


p#datetime{
text-align:right;



}
</style>
</head>
<body>
<div class="mainform">
        <h1>{{ $post->title }}</h1>

        <div class="card" style="width: 40rem;">
        <p id="datetime">投稿日：{{ $post->created_at}}</p>
        <p>{{ $post->content }}</p>

        </div>
</div>


<div class="coment_form">

</div>
</body>
</html>