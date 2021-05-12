window.onload = cargar;


function cargar() {
    //override the existing .covers filter
$(document).ready(function () {
    jQuery.expr[":"].covers = function (a, i, m) {
        return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
    };
    //This is a function for filter by the brand of the flavors
    $("#myInput").on("keyup", function () {
        $(".card").show();
        var filter = $(this).val().toUpperCase(); // get the value of the input, which we filter on
        $(".coverer")
            .find(".card-title:not(:covers(" + filter + "))")
            .parents(".quitar")
            .css({
                display: "none",
            });

        $(".coverer")
            .find(".card-title:covers(" + filter + ")")
            .parents(".quitar")
            .css({
                display: "flex",
            });
    });
});

    cards = document.getElementsByClassName("ponerImagenes");
    for (let index = 0; index < cards.length; index++) {
        //Leer la marca del tabaco

        marca = cards[index].children[0].children[2].innerText.split(": ")[1];
        console.log();
        switch (marca.toUpperCase()) {
            case "HOOKAIN":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://hookahhomespain.com/wp-content/uploads/2020/06/HOOKAIN.jpg); background-size: cover;"
                );
                break;

            case "ADALYA":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://cdn.awsli.com.br/600x450/331/331336/produto/17398541/48b956cd25.jpg); background-size: cover;"
                );
                break;

            case "AL FAKHER":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://tadiscan.es/site_files/wp-content/uploads/2016/04/alfakher.png); background-size: cover;"
                );
                break;

            case "AL WAHA":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://www.amydeluxe.de/5195-thickbox_default_2x/al-waha-fresh-t-min.jpg); background-size: cover;"
                );
                break;
            case "CHAOS":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://www.estancomoratalaz.es/data/100185/assets/Productos/Tabaco%20de%20sisa/Chaos/chaos@1554492538884@550x550-adjust_middle.png); background-size: cover;"
                );
                break;

            case "DOZAJ":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://www.estancomoratalaz.es/data/100185/assets/Productos/Tabaco%20de%20sisa/dozaj/dozaj@1561806612747@550x550-adjust_middle.jpg); background-size: cover;"
                );
                break;

            case "FOREVER GOLD":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://www.estancomoratalaz.es/data/100185/assets/Productos/Tabaco%20de%20sisa/Forever%20Gold/Forever%20Gold@1507578756466@550x550-adjust_middle.jpg); background-size: cover;"
                );
                break;

            case "FUMARI":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(http://fumandoespero.com/Blog/wp-content/uploads/2017/09/logo-fumari-750x410.jpg); background-size: cover;"
                );
                break;

            case "OVERDOZZ":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://www.estancomoratalaz.es/data/100185/assets/Productos/Tabaco%20de%20sisa/Overdooz/overdozz@1573501771450@550x550-adjust_middle.jpg); background-size: cover;"
                );
                break;

            case "PRIVILEGE":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://i.ytimg.com/vi/U6K52Ys5BH8/maxresdefault.jpg); background-size: cover;"
                );
                break;
            case "SERBETLI":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://admin.smokedex.info/images/hersteller/serbetli.jpg); background-size: cover;"
                );
                break;

            case "STARBUZZ":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(http://fumandoespero.com/Blog/wp-content/uploads/2015/04/Logo-Starbuzz-Tobacco.jpg); background-size: cover;"
                );
                break;

            case "SURFARI":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(http://fumandoespero.com/Blog/wp-content/uploads/2017/03/logo-tabaco-surfari-750x410.png); background-size: cover;"
                );
                break;

            case "TABOO":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://www.estancomoratalaz.es/data/100185/assets/Productos/Tabaco%20de%20sisa/Taboo/taboo@1504121242931@550x550-adjust_middle.jpg); background-size: cover;"
                );
                break;

            case "Hookain":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://hookahhomespain.com/wp-content/uploads/2020/06/HOOKAIN.jpg); background-size: cover;"
                );
                break;

            case "ZOMO":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://www.estancomoratalaz.es/data/100185/assets/Productos/Tabaco%20de%20sisa/zomo/zomo@1559078558048@550x550-adjust_middle.png); background-size: cover;"
                );
                break;

            case "MUSTHAVE":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://www.hookahbase.de/wp-content/uploads/2020/04/1580044939692-1.jpg); background-size: cover;"
                );
                break;

            case "NAMELESS":
                cards[index].setAttribute(
                    "style",
                    " background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) , url(https://www.estancomoratalaz.es/data/100185/assets/Productos/Tabaco%20de%20sisa/Nameless/NameLess@1602006360461@550x550-adjust_middle.jpg); background-size: cover;"
                );
                break;

            default:
                break;
        }
    }
}
