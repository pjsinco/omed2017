<?php

function omed2017_enqueue_styles() {

  $parent_style = 'parent-style';

  wp_enqueue_style( 
    $parent_style, 
    get_template_directory_uri() . '/style.css' 
  );

//  wp_enqueue_style(
//    'child-style',
//    get_stylesheet_directory_uri() . '/style.css',
//    //array( $parent_style ),
//    wp_get_theme()->get( 'Version' )
//  );

}

//add_action( 'after_setup_theme', 'omed2017_setup' );
add_action( 'wp_enqueue_scripts', 'omed2017_enqueue_styles' );

function omed_add_ninja_form_styles_2017( $form_id ) {

  if ( $form_id == 1 ) {

    echo '<style> 

    .page-contact-us .ninja-forms-required-items {
      /* display: none; */
    }

    .page-contact-us .ninja-forms-req-symbol {
      color: #fa4132;
    }

    .page-contact-us .ninja-forms-field {
      width: 100% !important;
      margin-left: 0 !important;
      margin-right: 0 !important;
      margin-top: .5rem;
      border-color: #7fc3ff;
    }

    .page-contact-us input:focus,
    .page-contact-us textarea:focus {
      box-shadow: 0 0 2px 2px rgba(127,195,255,.2)
    }

    .page-contact-us .ninja-forms-error .ninja-forms-field {
      margin-bottom: .33rem;
    }

    .page-contact-us .ninja-forms-field-error p {
      font-size: .75rem;
      text-align: center;
      color: #fa4132;
    }

    .ninja-forms-error-msg {
      margin-bottom: 1rem;
      text-align: center;
      background: #fcef06;
      padding: .5rem 0;
      font-size: .875rem;
      color: #fa4132;
    }

    .field-wrap:nth-last-child(2) {
      margin-bottom: 0;
    }

    </style>';
  }
}
add_action( 'ninja_forms_display_css' , 'omed_add_ninja_form_styles_2017' );
