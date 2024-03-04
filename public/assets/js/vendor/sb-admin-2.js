/*!
 * AI 2 v4.1.1
 * Copyright 2020 Alejandro RH
 * Main Coded by Start Bootstrap (https://startbootstrap.com/)
 */

!(function (t) {
  "use strict";
  t("#sidebarToggle, #sidebarToggleTop").on("click", function (e) {
      e.preventDefault(),
          t("body").toggleClass("sidebar-toggled"),
          t(".sidebar").toggleClass("toggled"),
          t(".sidebar").hasClass("toggled") &&
              t(".sidebar .collapse").collapse("hide");
  }),
      t(window).resize(function () {
          t(window).width() < 768 && t(".sidebar .collapse").collapse("hide");
      }),
      t("body.fixed-nav .sidebar").on(
          "mousewheel DOMMouseScroll wheel",
          function (e) {
              if (768 < t(window).width()) {
                  var o = e.originalEvent,
                      l = o.wheelDelta || -o.detail;
                  (this.scrollTop += 30 * (l < 0 ? 1 : -1)),
                      e.preventDefault();
              }
          }
      ),
      t(document).on("scroll", function () {
          100 < t(this).scrollTop()
              ? t(".scroll-to-top").fadeIn()
              : t(".scroll-to-top").fadeOut();
      }),
      t(document).on("click", "a.scroll-to-top", function (e) {
          var o = t(this);
          t("html, body")
              .stop()
              .animate(
                  { scrollTop: t(o.attr("href")).offset().top },
                  1e3,
                  "easeInOutExpo"
              ),
              e.preventDefault();
      });
})(jQuery);
