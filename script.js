/*Funkcja zegarka*/
function getTime()
{
    var data = new Date();

    var dni=data.getDate();
    if(dni<10)
    {
        dni = "0"+dni;
    }
    var miesiace=data.getMonth() + 1; /* Bo numeruje od 0 do 11 */
    if (miesiace<10)
    {
        miesiace="0"+miesiace;
    }
    var lata=data.getFullYear(); 

    var godziny=data.getHours();
    if(godziny<10)
    {
        godziny = "0"+godziny;
    }
    var minuty=data.getMinutes();
    if(minuty<10)
    {
        minuty = "0"+minuty;
    }
    var sekundy=data.getSeconds();
    if(sekundy<10)
    {
        sekundy = "0"+sekundy;
    }

    document.getElementById("currentTime").innerHTML = "Dzisiaj: "+dni+":"+miesiace+":"+lata+ "<br/>" + 
    "Godzina: "+godziny+":"+minuty+":"+sekundy;

    setTimeout("getTime()",1000); /* wywoływanie funkcji co 1000 milisekund */
}
/*Funkcja zegarka*/


/*Tutaj zaczyna się galeria zdjęć*/

$(document).ready(function()
{
    $(".galImg").click(function()
    {
        var photo = $(this).attr("rel");
        $('#mainPhoto').fadeOut('slow',function()
        {
            $("img.big").attr('src',photo);
            $('#mainPhoto').fadeIn('slow');
        });
    });
});

/*Tutaj kończy się galeria zdjęć*/
