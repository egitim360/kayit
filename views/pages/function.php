<?php

$categories = array (
  '01' => 'İş Sağlığı & Güvenliği',
  '02' => 'İş Dünyası',
  '03' => 'Mesleki Gelişim',
  '04' => 'Yönetimsel Gelişim',
  '05' => 'Kişisel Gelişim',
  '06' => 'Psikoloji & Sağlık',
  '07' => 'Hukuk',
  '08' => 'Satış & Pazarlama',
  '09' => 'Dijital Dünya',
  '00' => 'Oyun'
);

  $output = array();

  array_map(function($file){
    global $categories;
    global $output;

    if($file){
      $data = json_decode(file_get_contents($file), true);

      $contentFiles = @array_splice(explode('/', $file), 0, 2);
      $contentFiles = implode('/', $contentFiles) . '/*';
      $contentFiles = glob($contentFiles);

      $fileCountsArray = array();
      foreach($contentFiles as $folder){
        $folderName = explode('/', $folder);
        $folderName = $folderName[count($folderName) - 1];

        $fileCountsArray[$folderName] = count(glob($folder . '/*.*'));
      }

      if(
        @$fileCountsArray['image'] == 5 &&
        @$fileCountsArray['video'] == 2 &&
        @$fileCountsArray['json'] == 1 &&
        @$fileCountsArray['logo'] == 1
      ) {
          $allowPost = true;
      } else{
          $allowPost = false;
      }

      if($data && $allowPost){
        preg_match('/EINS([A-Za-z])([0-9].)([0-9].)(.*?)/', $data['Barcode'], $matches);

        $categoryId = $matches[2];
        $categoryName = $categories[$categoryId];

        $sliderImage = 'egitimler/' . $data['Barcode'] . '/image/slider-photo.jpg';
        $detailVideo = 'egitimler/' . $data['Barcode'] . '/video/detail-video.mp4';

        if(!@$output[$categoryId]){
          $output[$categoryId] = array();
        }

        $output[$categoryId][] = array(
          'Barcode' => $data['Barcode'],
          'LessonName' => $data['EducationName'],
          'LessonStatus' => $data['Status'],
          'LessonTime' => $data['Time'],
          'LessonSlide' => $data['Slide'],
          'LessonExplanation' => $data['Explanation'],
          'LessonType' => $data['Type'],
          'LessonStartingDate' => $data['StartingDate'],
          'LessonEndDate' => $data['EndDate'],
          'LessonTags' => $data['Tags'],
          'LessonUrl' => $data['Url'],
          'LessonImg' => $sliderImage,
          'LessonDetailVideo' => $detailVideo
        );
      }
    }
  }, glob('egitimler/*/json/*.json'));

?>
