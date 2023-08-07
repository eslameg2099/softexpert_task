/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap')
    require('admin-lte')

    global.moment = require('moment');
    require('daterangepicker');
    require('bootstrap-colorpicker');
    require('bootstrap-switch');
    require('summernote');
    require('select2/dist/js/select2.full');
    require('../echo');
    require('../editor');
    require('../datepicker');
    require('../tagsinput');
} catch (e) {}
