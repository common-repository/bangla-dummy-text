<?php
/*
Plugin Name: Bangla Dummy Text
Plugin URI: http://learn-with-mnaopu.blogspot.com
Description: This is a simple WordPress Bangla Dummy Text plugin. This plugin based on Bangla dummy content.
Version: 2.0
Author: Md. Naeem Ahmed Opu
Author URI: profiles.wordpress.org/mnaopu
License: GPL2
*/

//Admin Notice
function bangla_dummy_text_notice() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Thanks! For Using <strong>Bangla Dummy Text</strong> Plugin and Shortcode is <strong>[dummy-text p=4 wmin=80 punc=true]</strong>', '' ); ?></p>
    </div>
    <?php
}

//Dummy Content Bangla
$banglatext= explode(' ', "অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?

যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি; এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।

কোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো বলবে “আমি করবো না।” হ্যা, “আমি করবো না” বললেই সবকিছু অস্বীকার করা যায় না, হয়তো তুমি মনের গহীন গভীর থেকে ঠিকই বিশ্বাস করতে শুরু করেছো সেই কথাটি, কিন্তু মুখে অস্বীকার করছো। তাই সচেতন থাকো, তুমি কী ভাবছো— তার প্রতি; সচেতন থাকো, তুমি কি আসলেই বিশ্বাস করতে চলেছো ঐ কথাটি… শুধু এতটুকু বলি, যা-ই বিশ্বাস করো না কেন, আগে যাচাই করে নাও; আর এতে চাই তোমার প্রত্যুৎপন্নমতিত্ব।

তাই কোন কথাটি কাজে লাগবে, তা নির্ধারণ করবে তুমি— হ্যাঁ, তুমি। হয়তো সামান্য ক’টা বাংলা অক্ষর: খন্ড-ত, অনুস্বার, বিঃসর্গ কিংবা চন্দ্রবিন্দু— কিন্তু যদি তুমি বিশ্বাস করো, তাহলে হয়তো তুমি তা দিয়েই তৈরি করতে পারো এক উচ্চমার্গীয় মহাকাব্য- এক চিরসবুজ অর্ঘ্য। রচিত হতে পারে পৃথিবীর ১ম বিরাম চিহ্নের ইতিকথা – এক নতুন ঊষা। …মহাকাব্য লিখতে ঋষি-মুনি হওয়া লাগে না।
অর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও নিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি অর্থহীন, নাকি কিছু সত্যিই বলছে!


");

//Main Function

// ShortCode: [bangla-dummy-text p=4 wmin=80 punc=true]
function bangla_dummy_content($atts) {
  
  global $banglatext;
  
  $randomize_paragraph_length = true;
  $randomize_start = true;
  $loops = 4;      
  $wmin = 80;     
  $punc = true;

	extract(shortcode_atts(array(
		'p' => $loops,
		'wmin' => $wmin,
		'punc' => $punc,
	), $atts));
    $c = "";
  
  for ($j=0; $j<=$loops; $j++){
          if ($randomize_paragraph_length) {
      $loop_wmin = $wmin + rand(0, $wmin/3);
    } elseif (!$loop_wmin) {
      $loop_wmin = $wmin;
    }
    
    if($randomize_start) {
      $start = rand(0, $wmin);
    }

    $p = "";
  
    for ($i=$start; $i <= $loop_wmin+$start && $i < sizeof($banglatext); $i++) {
      $p .= $banglatext[$i] . " ";
    }
    
    $p = ucfirst(rtrim($p));
    
    if (substr($p, -1) != ".") $p .= ".";
    
    $c .= "<p>" . $p . "</p>";
  }
	return $c;
}
add_shortcode('bangla-dummy-text', 'bangla_dummy_content');

?>