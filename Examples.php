//Смена стандартного редактора на гутенберг Wordpress

function cw_post_type() {
    register_post_type( 'toys',
        // WordPress CPT Options Start
        array(
            'labels' => array(
                'name' => ( 'Toys' ),
                'singular_name' => ( 'toys' )
            ),
            'has_archive' => true,
            'public' => true,
            'rewrite' => array('slug' => 'Toys'),
            'show_in_rest' => true,
            'supports' => array('editor')
        )
    );
}
 
add_action( 'init', 'cw_post_type' );

//Смена стандартной галереи Opencart на галерею, работающей на плагине Owl Carousel

<div class="owl-carousel owl-theme">
<?php if ($images) { ?>
<?php foreach ($images as $image) { ?>
<li class="thumbnail">
<a class="thumbnail" href="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>">
<img src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" style="max-width: 100%" alt="<?php echo $heading_title; ?>" />
</a>
</li>
<?php } ?>
<?php } ?>
</div>

//Добавление нового поля для товара в админку Wordpress

woocommerce_wp_text_input(array(
        'id' => 'rent_price_24',
        'class' => 'wc_input_price short',
        'label' => ('Цена аренды за 24 месяца', 'woocommerce') . ' (' . get_woocommerce_currency_symbol() . ')',
        'data_type' => 'price',
        'description' => ('Для отключения цены аренды введите "0"',
            'woocommerce'),));


//И его сохранение 

    $price24 = 0;
    
    if(isset($_POST['rent_price_24']) && !empty($_POST['rent_price_24'])) {
        $price24 = $_POST['rent_price_24'];
    }
//Куски кода брал из разных проектов (Некоторые из них уже удалены с моего компьютера, брал с избранных сообщений в телеграмме)