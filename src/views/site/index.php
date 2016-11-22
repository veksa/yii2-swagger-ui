<div id="message-bar" class="swagger-ui-wrap" data-sw-translate>&nbsp;</div>
<div id="swagger-ui-container" class="swagger-ui-wrap"></div>

<?
/**
 * @var string $url
 * @var string $token
 */

$this->registerJs(<<<SCRIPT
    var url = '$url/swagger.json?access-token=$token';
    
    hljs.configure({
        highlightSizeThreshold: 5000
    });
    
    // Pre load translate...
    if(window.SwaggerTranslator) {
        window.SwaggerTranslator.translate();
    }
    
    window.swaggerUi = new SwaggerUi({
        url: url,
        dom_id: "swagger-ui-container",
        supportedSubmitMethods: ['get', 'post', 'put', 'delete', 'patch'],
        onComplete: function(swaggerApi, swaggerUi){
            if (window.SwaggerTranslator) {
                window.SwaggerTranslator.translate();
            }
            
            addApiKeyAuthorization();
        },
        onFailure: function(data) {
            log("Unable to Load SwaggerUI");
        },
        docExpansion: "none",
        jsonEditor: false,
        defaultModelRendering: "schema",
        showRequestHeaders: false,
    });
    
    function addApiKeyAuthorization() {
        var apiKeyAuth = new SwaggerClient.ApiKeyAuthorization("access-token", '$token', "query");
        window.swaggerUi.api.clientAuthorizations.add("jsonWebToken", apiKeyAuth);
    }
    
    window.swaggerUi.load();
    function log() {
        if ('console' in window) {
            console.log.apply(console, arguments);
        }
    }
SCRIPT
);
