<?php
// License at the bottom.

include_once("common/wraps/typical-layouts.php");
include_once("contact/face-and-name/mod.php");
include_once("contact/note.php");
include_once("contact/extra-table.php");

function get_contact_html(string $language) {
  [$contact, $css] = get_contact_and_css($language);
  $contact_wrapped = <<<EOHTML

<main class='newspaper'>
$contact
</main>

EOHTML;
  return get_typical_layout(
    $language, "contact", $css, "", $contact_wrapped
  );
}

function get_contact_and_css(string $language) {
  if ($language == "gr") {
    return get_contact_and_css_gr();
  }
  return get_contact_and_css_en();
}

function get_contact_and_css_en() {

  [$face_and_name, $face_and_name_css] = get_contact_face_and_css();
  $extra_table = get_contact_extra_table();
  
  $content = $face_and_name . get_contact_note_en() . $extra_table;
  return [$content, $face_and_name_css];
}

function get_contact_and_css_gr() {

  [$face_and_name, $face_and_name_css] = get_contact_face_and_css();
  $extra_table = get_contact_extra_table();
  
  $content = $face_and_name . get_contact_note_gr() . $extra_table;
  return [$content, $face_and_name_css];
}

function get_contact_face_and_css() {
  return get_face_and_name_aaand_css(
    "p3 phone-p2 m-like-h1 mlra round bg2 fg2",
    "../images/pat.png",
    "mock of a social media pfp",
    "dimakop<b>t</b>732@gmail.com",
    "(+30) 693 975 1642");
}

/*
Copyright (c) 2023 Dimakopoulos Theodoros

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
?>
