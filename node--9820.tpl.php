<!-- activer le module webform_hints pour afficher les labels dans les forms *
Paramétrer le module est spécifiant le formulaire concerné
admin/config/content/webform-hints
Cocher le formulaire Contact
Mettre une étoile dans "Required indicator"
-->



<section class="md-container center 111 section-content-form pl-15 pr-15 mt-90">
        <div class="block center">
            <h1 class="h2-evolution text-center mb-15">
                <?php echo __st('intro_title'); ?>
            </h1>
            <p class="text-center text-regular-evolution text-variant-lg">
                <?php echo __st('intro_desc'); ?>
            </p>
        </div>
        <div id="contact-form-div" class="display-flex mt-70">
          <?php
          $block = module_invoke('webform', 'block_view', 'client-block-'.(isset($block_id)?$block_id:4321));
          print render($block['content']);
          ?>
        </div>
</section>

<section class="text-center pl-15 pr-15 mt-90">
    <h2 class="h2-evolution text-center mb-15">
      <?php echo __st('map_title'); ?>
    </h2>
    <p class="text-regular-evolution text-variant-lg">
      <?php echo __st('map_desc'); ?>
    </p>
</section>

<section id="office-map" bx-width="0,0,100%" class="mt-60">
    <?php
    echo __imgCdn('contact-us/map.jpg', null, 'auto', '100%');
    ?>
</section>

<section class="md-container center mb-100 pb-15">
    <div class="flex-container center">
        <div class="flex-3 text-regular-evolution text-variant-xs text-center mt-20">
            <b class="bonita-red-type">San Francisco</b><br />
            44 Tehama St<br />San Francisco, CA 94105<br />
			USA
        </div>
        <div class="flex-3 text-regular-evolution text-variant-xs text-center mt-20">
            <b class="bonita-red-type">New York</b><br />
            The Yard, 33 Nassau Ave<br /> NY 11222<br />
			USA
        </div>
        <div class="flex-3 text-regular-evolution text-variant-xs text-center mt-20">
            <b class="bonita-red-type">Paris</b><br />
            76, boulevard de la République<br /> Boulogne<br />
            France
        </div>
        <div class="flex-3 text-regular-evolution text-variant-xs text-center mt-20">
            <b class="bonita-red-type">Grenoble</b><br />
            32, rue Gustave Eiffel<br /> Grenoble<br />
            France
        </div>
    </div>

</section>
