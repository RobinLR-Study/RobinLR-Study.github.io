function setlanguage() {
    let lang_top_menu = document.getElementsByClassName("menu");
    let lang_text = document.getElementsByClassName("text");
    let lang_title = document.getElementsByClassName("title");
    let lang_menu_title = document.getElementsByTagName("h3");
    let lang_footer = document.getElementsByClassName("footer-content");
    let lang_input = document.getElementsByClassName("language-form")
    let lang = document.getElementsByTagName("input");
    let francais = lang[0].checked;
    let english = lang[1].checked;
    if (francais == true && english == false) {
        lang_top_menu[0].childNodes[1].childNodes[0].textContent = "Accueil";
        lang_top_menu[0].childNodes[5].childNodes[0].textContent = "Histoire";
        lang_top_menu[0].childNodes[7].childNodes[0].textContent = "Intervention";
        lang_title[0].textContent = "Food-truck en baie de Somme";
        lang_title[2].textContent = "Notre Histoire";
        lang_title[3].textContent = "Nos intervention dans les médias";
        lang_text[0].textContent = "La Nature a du gôut est un foodtruck français ayant comme objectif d’offrir un moment convivial et plaisant pour vos événements publiques, vos séminaires ou vos soirées. Nous proposons un menu variant avec les saisons, liant street food et plantes dans le respect de l’environnement afin de vous montrer que la nature a beaucoup à vous offrir et à vous faire décourvrir.";
        lang_text[1].textContent = "Après ses études en restauration à l’école d’hôtellerie de Saint Martin à Amiens et à l’école d’hôtellerie de Jeanne d’Arc à Aulnoye-Aymeries, Dupont Ludovic commença sa carrière en tant que cuisinier à l’hôtel Savoy à Londres, puis en tant que chef dans différents restaurants en Françe et à l’étranger. Passionné de jardinage et de cueillette, il souhaite désormais partager sa passion de la cuisine et de la nature au plus grand nombre."
        lang_menu_title[0].textContent = "Plats";
        lang_menu_title[2].textContent = "Boissons";
        lang_footer[0].childNodes[9].childNodes[0].textContent = "Suivez nous sur:"
    } else if (english == true && francais == false) {
        lang_top_menu[0].childNodes[1].childNodes[0].textContent = "Home";
        lang_top_menu[0].childNodes[5].childNodes[0].textContent = "Our Story";
        lang_top_menu[0].childNodes[7].childNodes[0].textContent = "Media";
        lang_title[0].textContent = "French food-truck in baie de Somme";
        lang_title[2].textContent = "Our story";
        lang_title[3].textContent = "Saw on medias";
        lang_text[0].textContent = "La Nature a du Goût is a French foodtruck where our goal is to offer a cozy and pleasant time for your public event, seminar or party. Our menu provide dishes which change with the seasons, mixing vegetal cooking and street food, with respect for the environment, we want to show that nature has much to offer and to discover.";
        lang_text[1].textContent = "After his restoration studies in Saint Martin’s hotel school at Amiens and Jeanne d’Arc’s hotel school at Aulnoye-Aymeries, Dupont Ludovic started working as a cook at Savoy’s hotel in London, before getting more experience as a chef in many restaurants in France and overseas. As a passionate of plants and gathering, He now desire to share his passion of cooking and nature to all."
        lang_menu_title[0].textContent = "Dishes";
        lang_menu_title[2].textContent = "Drinks";
        lang_footer[0].childNodes[9].childNodes[0].textContent = "Follow us on:"
    }
}