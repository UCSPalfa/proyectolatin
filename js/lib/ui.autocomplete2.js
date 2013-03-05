//carlos: clon del ui.autocomplete.js para prevenir la busqueda livesearch en el plugin relatedgroups
elgg.provide('elgg.autocomplete');

elgg.autocomplete.init = function() {
    $('.elgg-input-autocomplete2').autocomplete({
        source: elgg.autocomplete2.url, //gets set by input/autocomplete view
        minLength: 2,
        html: "html"
    })
};

elgg.register_hook_handler('init', 'system', elgg.autocomplete.init);