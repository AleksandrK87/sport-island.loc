
<?php 

class si_widget_social_links extends WP_Widget{
   public function __construct(){
      parent::__construct(
         'si_widget_social_links',
         'SportIsland - Социальные ссылки',
         [
            'name' => 'SportIsland - Социальные ссылки',
            'discription' => 'Выводит ссылки на социальные сети',
         ]
      );
   }

   private $socials = [
      'fb' => [
         'Facebook',
         '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve">
         <style>
            path{
               fill: #fff;
            }
         </style>
      <g>
         <path d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
            c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
            v20.341H37.29v27.585h23.814v70.761H89.584z"/>
      </g>
      </svg>',
      ],
      'youtube' =>  [
         'Youtube',
         '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="96.875px" height="96.875px" viewBox="0 0 96.875 96.875" style="enable-background:new 0 0 96.875 96.875;"
         xml:space="preserve">
         <style>
            path{
               fill: #fff;
            }
         </style>
         <g>
            <path d="M95.201,25.538c-1.186-5.152-5.4-8.953-10.473-9.52c-12.013-1.341-24.172-1.348-36.275-1.341
            c-12.105-0.007-24.266,0-36.279,1.341c-5.07,0.567-9.281,4.368-10.467,9.52C0.019,32.875,0,40.884,0,48.438
            C0,55.992,0,64,1.688,71.336c1.184,5.151,5.396,8.952,10.469,9.52c12.012,1.342,24.172,1.349,36.277,1.342
            c12.107,0.007,24.264,0,36.275-1.342c5.07-0.567,9.285-4.368,10.471-9.52c1.689-7.337,1.695-15.345,1.695-22.898
            C96.875,40.884,96.889,32.875,95.201,25.538z M35.936,63.474c0-10.716,0-21.32,0-32.037c10.267,5.357,20.466,10.678,30.798,16.068
            C56.434,52.847,46.23,58.136,35.936,63.474z"/>
         </g>
         </svg>',
      ],
      'instagram' => [
         'Instagram',
         '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="97.395px" height="97.395px" viewBox="0 0 97.395 97.395" style="enable-background:new 0 0 97.395 97.395;"
         xml:space="preserve">
         <style>
            path{
               fill: #fff;
            }
         </style>
         <g>
            <path d="M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895
               V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385
               h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572
               c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332
               c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188
               H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953
               c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z"/>
         </g>
         </svg>',
      ]
   ];

   public function form( $instance ) {
?>
   <p>
      <label for="<?php echo $this->get_field_id('id-link');?> ">
         Ссылка на социальную сеть:
      </label>
      <input
         id="<?php echo $this->get_field_id('id-link'); ?>"
         type="text"
         name="<?php echo $this->get_field_name('link'); ?>"
         value="<?php echo $instance['link']; ?>"
         class="widefat"
      >
   </p>
   <p>
      <label for="<?php echo $this->get_field_id('id-slug');?> ">
         Выберете социальную сеть:
      </label>
      <select
         id="<?php echo $this->get_field_id('id-slug'); ?>"
         name="<?php echo $this->get_field_name('slug'); ?>"
         class="widefat"
      >
      <?php
         foreach( $this->socials as $slug => $desc ):
      ?>
         <option 
         value="<?php echo $slug; ?>"
         <?php selected($instance['slug'], $slug, true); ?>
         >
            <?php echo $desc[0]; ?>
         </option>
      <?php endforeach; ?>     
      </select>
   </p>


<?php 
   }

   public function widget( $args, $instance ) {
      $slug = $instance['slug'];
      $link = $instance['link'];
      $text = $this->socials[$slug][0];
      $svg = $this->socials[$slug][1];
   
?>

      <a 
         target="_blank" 
         href="<?php echo $link; ?>" 
         class="widget-social-links <?php echo $slug; ?>"   
      >
         <span class="sr-only"> Мы в <?php echo $text; ?>! </span>
         <?php echo $svg; ?>
      </a>

<?php
   }
   
   public function update( $new_instance, $old_instance ) {
      return $new_instance;
   }
}