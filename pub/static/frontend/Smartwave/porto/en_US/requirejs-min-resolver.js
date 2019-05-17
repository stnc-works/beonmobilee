    var ctx = require.s.contexts._,
        origNameToUrl = ctx.nameToUrl;

    ctx.nameToUrl = function() {
        var url = origNameToUrl.apply(ctx, arguments);
        if (!url.match(/\/tiny_mce\//)) {
            url = url.replace(/(\.min)?\.js$/, '.min.js');
        }
        return url;
    };
