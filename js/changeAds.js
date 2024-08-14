var imagesSrc = ['imagens/anuncios/ads-1.png','imagens/anuncios/ads-2.jpg','imagens/anuncios/ads-3.jpg'];

current = 0;

changeAds();

function changeAds(){
    circuloUm = document.getElementById("circulo-um").classList;
    circuloDois = document.getElementById("circulo-dois").classList;
    circuloTres = document.getElementById("circulo-tres").classList;
    limite = 3;

    if(current >= limite){
        current = 0;
    }
    
    if(current == 0){
        focarNaBolinhaUm();
    }
    if(current == 1){
        focarNaBolinhaDois();
    }
    
    if(current == 2){
        focarNaBolinhaTres();
    };

    anuncio = document.getElementById('ads-images');

    anuncio.src = imagesSrc[current];

    setTimeout(function(){changeAds();},1000);

    current = current + 1;

    function focarNaBolinhaUm(){
        circuloUm.add('bi-circle');
        circuloUm.remove('bi-arrow-right-circle-fill');

        circuloDois.add('bi-circle');
        circuloDois.remove('bi-arrow-right-circle-fill');

        circuloTres.add('bi-circle');
        circuloTres.remove('bi-arrow-right-circle-fill');



        circuloUm.add('bi-arrow-right-circle-fill');
        circuloUm.remove('bi-circle');

        circuloDois.add('bi-circle');
        circuloDois.remove('bi-arrow-right-circle-fill');

        circuloTres.add('bi-circle');
        circuloTres.remove('bi-arrow-right-circle-fill');
    }

    function focarNaBolinhaDois(){
        circuloDois.add('bi-arrow-right-circle-fill');
        circuloDois.remove('bi-circle');
    }

    function focarNaBolinhaTres(){
        circuloTres.add('bi-arrow-right-circle-fill');
        circuloTres.remove('bi-circle');
    }
};