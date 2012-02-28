<?php defined('SYSPATH') OR die('No direct access allowed.');
  class Content_Model extends Model{
      public $a_Content=array();

      public function __construct(){
          parent::__construct();
      }
      private function get_title($i_Active){
         return $this->a_Title[$i_Active];
      }
      private function get_main_menu($i_Active){
        $menu = $this->a_MainMenu;
        $menu[$i_Active]['active'] = 1;
        return $menu;
      }
      private function get_submenu($i_Active,$i_Subactive){
          
      }
      private function get_sections($i_Active,$i_Subactive){
          
      }
      public function get_content($i_Active,$i_Subactive){
        $this->a_Content['title'] = $this->get_title($i_Active);
        $this->a_Content['main_menu'] = $this->get_main_menu($i_Active);
        $this->a_Content['submenu'] = $this->get_submenu($i_Active,$i_Subactive);
        $this->a_Content['sections'] = $this->get_sections($i_Active,$i_Subactive);
      }
  }
?>