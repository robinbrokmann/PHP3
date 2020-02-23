

//De laatst geklikde waarde.
var laatstGeklikt = 0;
//Of de foute kaart animatie nog bezig is.
var animatieKlaar = true;

function klikKaart(kaart, waarde) {
    if(!animatieKlaar){
        //Als de foute kaart animatie nog bezig is, doe dan niets.
        return;
    }
    if(laatstGeklikt === 0){
        //Als er nog geen kaart geselecteerd is.
        $(kaart).addClass("selected");
        $(kaart).html(waarde);
        laatstGeklikt = waarde;
        return;
    }

    if(waarde === laatstGeklikt){
        //Als de geklikte waarde hetzelfde is als de vorige kaart.
        if($(kaart).hasClass("selected")){
            //Je klikt op dezelfde kaart die al geselecteerd is.
            return;
        }
        $(kaart).addClass("selected");
        $(kaart).html(waarde);
        $("td").each(function () {
            if(this.innerHTML === laatstGeklikt){
                //Selecteer alle kaarten met de geklikte waarde en maak ze onzichtbaar.
                $(this).fadeTo(500, 0);
                $(this).removeClass("selected");
                $(this).prop("onclick", null).off("click");
            }
        })
    } else {
        //Als je de verkeerde kaart hebt geselecteerd.
        $(kaart).addClass("selected");
        $(kaart).html(waarde);
        $("td").each(function () {
            if($(this).hasClass("selected")){
                //Seleceer de vorige kaart.
                $(this).removeClass("selected");
                $(this).addClass("wrong");
                animatieKlaar = false;

                //Speel de "animatie".
                setTimeout(function (e) {
                    e.html("");
                    e.removeClass("wrong");
                    animatieKlaar = true;
                }, 500, $(this))
            }
        })
    }
    //Reset de laatst geklikte waarde.
    laatstGeklikt = 0;
}