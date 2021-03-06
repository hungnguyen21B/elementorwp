<?php
    /**
     * @since 6.2.2 Slightly changed the way errors are displayed
     * @since 6.2.0 Escaping backslashes to avoid issue with JSON validation
     * @since 6.1.1 Removing the backslashes before displaying the policy
     * @since 6.0.0 Initial implementation of the template
     *
     * @version 6.2.2
     */
?>
<?php if (defined('AAM_KEY')) { ?>
    <div>
        <style type="text/css">.CodeMirror{font-family:monospace;height:300px;color:#000;direction:ltr;border:1px solid #eee;padding:5px}.CodeMirror-lines{padding:4px 0}.CodeMirror pre{padding:0 4px}.CodeMirror-gutter-filler,.CodeMirror-scrollbar-filler{background-color:#fff}.CodeMirror-gutters{white-space:nowrap}.CodeMirror-linenumber{padding:0 3px 0 0;min-width:15px;text-align:right;color:#999;white-space:nowrap}.CodeMirror-guttermarker{color:#000}.CodeMirror-guttermarker-subtle{color:#999}.CodeMirror-cursor{border-left:1px solid #000;border-right:none;width:0}.CodeMirror div.CodeMirror-secondarycursor{border-left:1px solid silver}.cm-fat-cursor .CodeMirror-cursor{width:auto;border:0!important;background:#7e7}.cm-fat-cursor div.CodeMirror-cursors{z-index:1}.cm-fat-cursor-mark{background-color:rgba(20,255,20,.5);-webkit-animation:blink 1.06s steps(1) infinite;-moz-animation:blink 1.06s steps(1) infinite;animation:blink 1.06s steps(1) infinite}.cm-animate-fat-cursor{width:auto;border:0;-webkit-animation:blink 1.06s steps(1) infinite;-moz-animation:blink 1.06s steps(1) infinite;animation:blink 1.06s steps(1) infinite;background-color:#7e7}@-moz-keyframes blink{50%{background-color:transparent}}@-webkit-keyframes blink{50%{background-color:transparent}}@keyframes blink{50%{background-color:transparent}}.cm-tab{display:inline-block;text-decoration:inherit}.CodeMirror-rulers{position:absolute;left:0;right:0;top:-50px;bottom:-20px;overflow:hidden}.CodeMirror-ruler{border-left:1px solid #ccc;top:0;bottom:0;position:absolute}.cm-s-default .cm-header{color:#00f}.cm-s-default .cm-quote{color:#090}.cm-negative{color:#d44}.cm-positive{color:#292}.cm-header,.cm-strong{font-weight:700}.cm-em{font-style:italic}.cm-link{text-decoration:underline}.cm-strikethrough{text-decoration:line-through}.cm-s-default .cm-keyword{color:#708}.cm-s-default .cm-atom{color:#219}.cm-s-default .cm-number{color:#164}.cm-s-default .cm-def{color:#00f}.cm-s-default .cm-variable-2{color:#05a}.cm-s-default .cm-type,.cm-s-default .cm-variable-3{color:#085}.cm-s-default .cm-comment{color:#a50}.cm-s-default .cm-string{color:#a11}.cm-s-default .cm-string-2{color:#f50}.cm-s-default .cm-meta{color:#555}.cm-s-default .cm-qualifier{color:#555}.cm-s-default .cm-builtin{color:#30a}.cm-s-default .cm-bracket{color:#997}.cm-s-default .cm-tag{color:#170}.cm-s-default .cm-attribute{color:#00c}.cm-s-default .cm-hr{color:#999}.cm-s-default .cm-link{color:#00c}.cm-s-default .cm-error{color:red}.cm-invalidchar{color:red}.CodeMirror-composing{border-bottom:2px solid}div.CodeMirror span.CodeMirror-matchingbracket{color:#0b0}div.CodeMirror span.CodeMirror-nonmatchingbracket{color:#a22}.CodeMirror-matchingtag{background:rgba(255,150,0,.3)}.CodeMirror-activeline-background{background:#e8f2ff}.CodeMirror{position:relative;overflow:hidden;background:#fff}.CodeMirror-scroll{overflow:scroll!important;margin-bottom:-30px;margin-right:-30px;padding-bottom:30px;height:100%;outline:0;position:relative}.CodeMirror-sizer{position:relative;border-right:30px solid transparent}.CodeMirror-gutter-filler,.CodeMirror-hscrollbar,.CodeMirror-scrollbar-filler,.CodeMirror-vscrollbar{position:absolute;z-index:6;display:none}.CodeMirror-vscrollbar{right:0;top:0;overflow-x:hidden;overflow-y:scroll}.CodeMirror-hscrollbar{bottom:0;left:0;overflow-y:hidden;overflow-x:scroll}.CodeMirror-scrollbar-filler{right:0;bottom:0}.CodeMirror-gutter-filler{left:0;bottom:0}.CodeMirror-gutters{position:absolute;left:0;top:0;min-height:100%;z-index:3}.CodeMirror-gutter{white-space:normal;height:100%;display:inline-block;vertical-align:top;margin-bottom:-30px}.CodeMirror-gutter-wrapper{position:absolute;z-index:4;background:0 0!important;border:none!important}.CodeMirror-gutter-background{position:absolute;top:0;bottom:0;z-index:4}.CodeMirror-gutter-elt{position:absolute;cursor:default;z-index:4}.CodeMirror-gutter-wrapper ::selection{background-color:transparent}.CodeMirror-gutter-wrapper ::-moz-selection{background-color:transparent}.CodeMirror-lines{cursor:text;min-height:1px}.CodeMirror pre{-moz-border-radius:0;-webkit-border-radius:0;border-radius:0;border-width:0;background:0 0;font-family:inherit;font-size:inherit;margin:0;white-space:pre;word-wrap:normal;line-height:inherit;color:inherit;z-index:2;position:relative;overflow:visible;-webkit-tap-highlight-color:transparent;-webkit-font-variant-ligatures:contextual;font-variant-ligatures:contextual}#policy-model .CodeMirror pre{padding-left:20px}.CodeMirror-wrap pre{word-wrap:break-word;white-space:pre-wrap;word-break:normal}.CodeMirror-linebackground{position:absolute;left:0;right:0;top:0;bottom:0;z-index:0}.CodeMirror-linewidget{position:relative;z-index:2;padding:.1px}.CodeMirror-rtl pre{direction:rtl}.CodeMirror-code{outline:0}.CodeMirror-gutter,.CodeMirror-gutters,.CodeMirror-linenumber,.CodeMirror-scroll,.CodeMirror-sizer{-moz-box-sizing:content-box;box-sizing:content-box}.CodeMirror-measure{position:absolute;width:100%;height:0;overflow:hidden;visibility:hidden}.CodeMirror-cursor{position:absolute;pointer-events:none}.CodeMirror-measure pre{position:static}div.CodeMirror-cursors{visibility:hidden;position:relative;z-index:3}div.CodeMirror-dragcursors{visibility:visible}.CodeMirror-focused div.CodeMirror-cursors{visibility:visible}.CodeMirror-selected{background:#d9d9d9}.CodeMirror-focused .CodeMirror-selected{background:#d7d4f0}.CodeMirror-crosshair{cursor:crosshair}.CodeMirror-line::selection,.CodeMirror-line>span::selection,.CodeMirror-line>span>span::selection{background:#d7d4f0}.CodeMirror-line::-moz-selection,.CodeMirror-line>span::-moz-selection,.CodeMirror-line>span>span::-moz-selection{background:#d7d4f0}.cm-searching{background-color:#ffa;background-color:rgba(255,255,0,.4)}.cm-force-border{padding-right:.1px}@media print{.CodeMirror div.CodeMirror-cursors{visibility:hidden}}.cm-tab-wrap-hack:after{content:''}span.CodeMirror-selectedtext{background:0 0}.aam-alert-danger{border-radius:0;margin:10px 0;color:#a94442;background-color:#f2dede;border-color:#ebccd1;padding:15px;border:1px solid transparent}.aam-infobox{border-left:5px solid #257fad;padding:20px;background-color:#d9edf7;margin-bottom:0}</style>

        <?php
            if (!empty($params->post->post_content)) {
                // Validate the policy
                $validator = new AAM_Core_Policy_Validator(htmlspecialchars_decode($params->post->post_content));
                $errors    = $validator->validate();
            } else {
                $params->post->post_content = AAM_Backend_Feature_Main_Policy::getDefaultPolicy();
                $errors = array();
            }
        ?>

        <div class="aam-alert-danger<?php echo (empty($errors) ? ' hidden' : ''); ?>" id="policy-parsing-error">
            <?php
                $list = array();
                foreach($errors as $error) {
                    $list[] = '<li>- ' . $error . ';</li>';
                }

                if (!empty($list)) {
                    echo '<ul>' . implode('', $list) . '</ul>';
                }
            ?>
        </div>

        <textarea id="aam-policy-editor" name="aam-policy" class="policy-editor" rows="10"><?php echo stripslashes($params->post->post_content); ?></textarea>

        <p class="aam-infobox">
            <?php echo sprintf(AAM_Backend_View_Helper::preparePhrase('To learn more about Access &amp; Security policy document, please check  [%sAccess &amp; Security Policy%s] page.', 'b'), '<a href="https://aamplugin.com/reference/policy" target="_blank">', '</a>'); ?>
        </p>

        <script type='text/javascript' src="<?php echo AAM_MEDIA . '/js/vendor.js'; ?>"></script>

        <script type='text/javascript'>
            (function($) {
                var editor = CodeMirror.fromTextArea(
                    document.getElementById("aam-policy-editor"), {
                        mode: "application/json",
                        lineNumbers: true
                    }
                );

                $(document).ready(function() {
                    $('form[name="post"]').bind('submit', function(event) {
                        var json = editor.getValue().replace(/\\/g, '\\\\');

                        $('#policy-parsing-error').addClass('hidden');

                        try {
                            JSON.parse(json);

                            $('#aam-policy-editor').val(json);
                        } catch (e) {
                            event.preventDefault();

                            $('#policy-parsing-error').removeClass('hidden').html(
                                '<b><?php echo __('Syntax Error', AAM_KEY); ?></b>: ' + e.message.replace('JSON.parse:', '')
                            );
                        }
                    });
                });
            }(jQuery));
        </script>
    </div>
<?php }