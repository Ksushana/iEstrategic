<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$_default_image = "images/bg-home.jpg";
$_logo_image = "images/logo.png";
$_logo_icon = "images/logo-icon.png";


/*------ Menus ------
(url => label) */

/* Site menu */
$site_menu = array(
    "/products" => "Productos",
    "/procesos" => "Procesos",
    "/empres" => "Empresa",
    "/contacto" => "Contacto",
);

/* Footer menus */
$footer_1_menu = array(
    "/1" => "Categoría productos 1",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
    "/4" => "Subcategoría 3",
    "/5" => "Subcategoría 4",
    "/6" => "Subcategoría 5",
);
$footer_2_menu = array(
    "/1" => "Categoría productos 2",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
    "/4" => "Subcategoría 3",
);
$footer_3_menu = array(
    "/1" => "Categoría productos 3",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
    "/4" => "Subcategoría 3",
    "/5" => "Subcategoría 4",
);
$footer_4_menu = array(
    "/1" => "Categoría productos 4",
    "/2" => "Subcategoría 1",
    "/3" => "Subcategoría 2",
);
$footer_5_menu = array(
    "/1" => "Categoría productos 5",
);
$footer_6_menu = array(
    "/1" => "Categoría productos 6",
    "/2" => "Subcategoría 1",
);
$footer_7_menu = array(
    "/1" => "Categoría productos 7",
);

/* Footer nav menu */
$footer_nav_menu = array(
    "/empresa" => "Empresa",
    "/productos" => "Productos",
    "/terminos" => "Términos y condiciones",
    "/devoluciones" => "Política de devoluciones",
    "/contacto" => "Contacto",
);

/* Footer disclaimers menu */
$footer_disclaimer_menu = array(
    "/aviso-legal" => "Aviso legal",
    "/privacidad" => "Política de privacidad",
    "/cookies" => "Política de cookies",
);


/*------ Top image ------*/
$top_image_section = (object) array(
    "title" => "Title 1",
    "content" => "Nulla facilisi. Nulla ultricies bibendum semper. Donec efficitur porta massa, at tristique dolor posuere ut. Vestibulum eu diam euismod, facilisis nibh non, malesuada libero.",
    "image" => $_default_image,
);


/*------ 1st section blocks ------
(url => page_data array) */
$first_section_pages = array(
    "/1" => (object) array(
        "title" => "Categoría 1",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in egestas nunc, vitae interdum odio. In lobortis, elit vehicula venenatis vestibulum",
        "image" => "images/1-products/product-1.jpg",
    ),
    "/2" => (object) array(
        "title" => "Categoría 2",
        "description" => "Sem mi consequat dolor, sed pellentesque magna leo ac neque. Sed in neque volutpat nisi maximus elementum. In viverra convallis odio. Sed aliquam diam nec metus luctus",
        "image" => "images/1-products/product-2.jpg",
    ),
    "/3" => (object) array(
        "title" => "Categoría 3",
        "description" => "Morbi mollis sodales pharetra",
        "image" => "images/1-products/product-3.jpg",
    ),
    "/4" => (object) array(
        "title" => "Categoría 4",
        "description" => "Etiam id mi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean et odio hendrerit, feugiat mauris sed, consectetur neque. Proin ut nibh ac risus faucibus consequat. Nulla ante elit, dictum et vestibulum et, lacinia sed nulla. Suspendisse accumsan auctor dolor, sit amet vestibulum augue rhoncus aliquet. In vel ex varius, lacinia purus ut, mattis ex.",
        "image" => "images/1-products/product-4.jpg",
    ),
    "/5" => (object) array(
        "title" => "Categoría 5",
        "description" => "Vehicula venenatis vestibulum",
        "image" => "images/1-products/product-5.jpg",
    ),
    "/6" => (object) array(
        "title" => "Categoría 6",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "image" => "images/1-products/product-6.jpg",
    ),
    "/7" => (object) array(
        "title" => "Categoría 7",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in egestas nunc, vitae interdum odio. In lobortis, elit vehicula venenatis vestibulum",
        "image" => "images/1-products/product-7.jpg",
    ),
);


/*------ 2nd section ------*/
$second_section = (object) array(
    "title" => "Title 2",
    "content" => "Donec efficitur porta massa, at tristique dolor posuere ut. Vestibulum eu diam euismod, facilisis nibh non, malesuada libero.",
    "image" => $_default_image,
    "logos" => glob("images/2-logos/*.png"),
);


/*------ 3rd section blocks ------
(url => page_data array) */
$third_section_pages = array(
    "/1" => (object) array(
        "title" => "Producto 1",
        "description" => "Morbi mollis sodales pharetra",
        "image" => "images/3-products/product-1.jpg",
    ),
    "/2" => (object) array(
        "title" => "Producto 2",
        "description" => "Sem mi consequat dolor, sed pellentesque magna leo ac neque. Sed in neque volutpat nisi maximus elementum. In viverra convallis odio. Sed aliquam diam nec metus luctus",
        "image" => "images/3-products/product-2.jpg",
    ),
    "/3" => (object) array(
        "title" => "Producto 3",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in egestas nunc, vitae interdum odio. In lobortis, elit vehicula venenatis vestibulum",
        "image" => "images/3-products/product-3.jpg",
    ),
);


/*------ 4th section blocks ------
(url => page_data array) */
$fourth_section_pages = array(
    "/1" => (object) array(
        "title" => "Categoría destacada 1",
        "image" => "images/4-featured-categories/featured-category-1.jpg",
    ),
    "/2" => (object) array(
        "title" => "Categoría destacada 2",
        "image" => "images/4-featured-categories/featured-category-2.jpg",
    ),
    "/3" => (object) array(
        "title" => "Categoría destacada 3",
        "image" => "images/4-featured-categories/featured-category-3.jpg",
    ),
    "/4" => (object) array(
        "title" => "Categoría destacada 4",
        "image" => "images/4-featured-categories/featured-category-2.jpg",
    ),
    "/5" => (object) array(
        "title" => "Categoría destacada 5",
        "image" => "images/4-featured-categories/featured-category-3.jpg",
    ),
);


/*------ Contact block (5th section) ------*/
$_contact_section = (object) array(
    "address" => "Passeig Picasso, 40",
    "postal_code" => "08003",
    "address_city" => "Barcelona",
    "phone" => "935 22 22 44",
    "phonelink" => "+34935222244",
    "email" => "hola@iestrategic.com",
    "map" => "https://goo.gl/maps/BaudsdYzuZqYNsLB7",
    "form_text" => "Si desea más información acerca de cualquiera de nuestros servicios rellene el siguiente formulario y nos pondremos en contacto con usted.",
);


include '_icons.php';

?>

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">