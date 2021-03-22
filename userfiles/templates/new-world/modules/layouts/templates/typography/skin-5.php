<?php

/*

type: layout

name: Typography 5

position: 5

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<style>
    .mw-default-layout-typography-5 pre.mw-default-layout-pre {
        background-color: rgba(0, 0, 0, 0.01);
        border: 1px solid rgba(51, 51, 51, 0.1);
        padding: 0.8em;}


</style>

<section class="section <?php print $layout_classes; ?> edit" field="layout-typography-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="col mw-default-layout-typography-5">
        <div class="element">
                <pre class="mw-default-layout-pre">
                    <li class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                </pre>
        </div>
    </div>
</section>



