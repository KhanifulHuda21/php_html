var database={
    "menu":{
        "dropdown":{
            "value":{
                "Vintage 98":["#1"],
                "Gazelle":["#2"],
                "R&D":["#3"]
            }
        },
        "link":{
            "value":{
                "Home":["#1"],
                "Produk Terpopuler":["#produk_terpopuler"],
                "Rekomendasi":["#rekomendasi"],
                "Produk Favorit":["#produk_favorit"]
            }
        }
    }
    
};

// / database.menu.dropdown.value.forEach(el=>{
//     alert(el);
// });

var menu_dropdown_temp="";
var menu_dropdown_key=Object.keys(database.menu.dropdown.value);

for(x=0;x<menu_dropdown_key.length;x++){
    // alert(menu_dropdown_key[x]);
    menu_dropdown_temp+=`<a class="dropdown-item" herf="`+database.menu.dropdown.value[menu_dropdown_key[x]]+`">`+menu_dropdown_key[x]+`</a>`;
}
$('#menu_dropdown').html(menu_dropdown_temp);

var menu_link_temp="";
var menu_link_key=Object.keys(database.menu.link.value);

for(x=0;x<menu_link_key.length;x++){
    // alert(menu_dropdown_key[x]);
    menu_link_temp+=`<li class="nav-item ">
    <a class="nav-link" href="`+database.menu.link.value[menu_link_key[x]]+`">`+menu_link_key[x]+` </a>
</li>`;
}
$('#menu_link').append(menu_link_temp);

