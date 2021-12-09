import jquery from 'jquery/dist/jquery.min';
window.$ = jquery;
window.jQuery = jquery;
/*! Adopt.js - v0.1.0 - 2013
* Copyright (c) 2013 Vivek Patel; Licensed MIT */
(function($) {
  $.fn.adopt = function() {
    this.each(function() {
      $(this).contents().filter(function() {
        return this.nodeType === 3;
      }).each(function(i) {
        this.data = this.data.replace(/(\s)([\S])[\s]+/g, "$1$2\u00a0");
        var lastIndex = this.data.lastIndexOf(" ");
        if (0 < lastIndex && lastIndex < this.data.length - 1 && this.data.substring(lastIndex + 1).length < 10) {
          this.data = this.data.substring(0, lastIndex) + "\u00a0" + this.data.substring(lastIndex + 1);
        }
      });
    });
  };
}(jQuery));
