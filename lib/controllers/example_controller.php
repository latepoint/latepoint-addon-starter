<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}


if ( ! class_exists( 'OsExampleController' ) ) :


  class OsExampleController extends OsController {



    function __construct(){
      parent::__construct();

      $this->views_folder = plugin_dir_path( __FILE__ ) . '../views/example/';
      $this->vars['page_header'] = __('Example', 'latepoint');
      $this->vars['breadcrumbs'][] = ['label' => __('Example', 'latepoint-addon-starter'), 'link' => OsRouterHelper::build_link(['example', 'view_example'] )];
    }



    public function view_example(){
      $this->vars['example_var'] = OsExampleHelper::example_call();
      $this->format_render(__FUNCTION__);
    }

  }

endif;