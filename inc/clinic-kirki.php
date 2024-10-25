<?php


new \Kirki\Panel(
	'clinic_panle',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'clinic Options', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

// Section 01

function clinic_header_info_section(){

     new \Kirki\Section(
          'clinic_header_section',
          [
               'title'       => esc_html__( 'Header Info', 'kirki' ),
               'description' => esc_html__( 'My Section Description.', 'kirki' ),
               'panel'       => 'clinic_panle',
               'priority'    => 160,
          ]
     );

     new \Kirki\Field\Checkbox_Switch(
          [
               'settings'    => 'header_top_switch',
               'label'       => esc_html__( 'Header Topbar Switch', 'kirki' ),
               'description' => esc_html__( 'Header topbar switch information', 'kirki' ),
               'section'     => 'clinic_header_section',
               'default'     => 'off',
               'choices'     => [
                    'on'  => esc_html__( 'Enable', 'kirki' ),
                    'off' => esc_html__( 'Disable', 'kirki' ),
               ],
          ]
     );
     
     new \Kirki\Field\Text(
          [
               'settings' => 'address_text',
               'label'    => esc_html__( 'Address Text', 'kirki' ),
               'section'  => 'clinic_header_section',
               'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'kirki' ),
               'priority' => 10,
          ]
     );
     
     // new \Kirki\Field\Text(
     //      [
     //           'settings' => 'address_url',
     //           'label'    => esc_html__( 'Address URL', 'kirki' ),
     //           'section'  => 'clinic_header_section',
     //           'default'  => esc_html__( '#', 'kirki' ),
     //           'priority' => 10,
     //      ]
     // );
     
     new \Kirki\Field\Text(
          [
               'settings' => 'phone_number',
               'label'    => esc_html__( 'Phone Number', 'kirki' ),
               'section'  => 'clinic_header_section',
               'default'  => esc_html__( '+8801860003538', 'kirki' ),
               'priority' => 10,
          ]
     );
}
clinic_header_info_section();


// Section 02
function clinic_header_social_section(){
     new \Kirki\Section(
          'clinic_header_social_section',
          [
               'title'       => esc_html__( 'Header Social', 'kirki' ),
               'description' => esc_html__( 'clinic Header Social Info', 'kirki' ),
               'panel'       => 'clinic_panle',
               'priority'    => 160,
          ]
     );
     
     new \Kirki\Field\Text(
          [
               'settings' => 'header_fb_url',
               'label'    => esc_html__( 'Facebook URL', 'kirki' ),
               'section'  => 'clinic_header_social_section',
               'default'  => esc_html__( '#', 'kirki' ),
               'priority' => 10,
          ]
     );
     new \Kirki\Field\Text(
          [
               'settings' => 'header_instagram_url',
               'label'    => esc_html__( 'Instagram URL', 'kirki' ),
               'section'  => 'clinic_header_social_section',
               'default'  => esc_html__( '#', 'kirki' ),
               'priority' => 10,
          ]
     );
     new \Kirki\Field\Text(
          [
               'settings' => 'header_twitter_url',
               'label'    => esc_html__( 'Twitter URL', 'kirki' ),
               'section'  => 'clinic_header_social_section',
               'default'  => esc_html__( '#', 'kirki' ),
               'priority' => 10,
          ]
     );
     new \Kirki\Field\Text(
          [
               'settings' => 'header_linkedin_url',
               'label'    => esc_html__( 'Linkedin URL', 'kirki' ),
               'section'  => 'clinic_header_social_section',
               'default'  => esc_html__( '#', 'kirki' ),
               'priority' => 10,
          ]
     );
}
clinic_header_social_section();


function clinic_header_logo_section(){
     new \Kirki\Section(
          'clinic_header_logo_section',
          [
               'title'       => esc_html__( 'Header Logo', 'kirki' ),
               'description' => esc_html__( 'clinic Header Logo Info', 'kirki' ),
               'panel'       => 'clinic_panle',
               'priority'    => 160,
          ]
     );

     new \Kirki\Field\Image(
          [
               'settings'    => 'header_logo',
               'label'       => esc_html__( 'clinic Logo', 'kirki' ),
               'description' => esc_html__( 'Please set your header logo', 'kirki' ),
               'section'     => 'clinic_header_logo_section',
               'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
          ]
     );
}

clinic_header_logo_section();
