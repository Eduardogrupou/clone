
<!DOCTYPE html>
<html lang="pt-br">

 <head>
            <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <meta name="viewport" content="width=device-width,
                    initial-scale=1.0,
                    minimum-scale=1.0">

            <title>Orvalho</title>

            <meta name="keywords" content="Marketplace ecommerce responsive
                    HTML5
                    Template" />
            <meta name="description" content="Wolmart is powerful
                    marketplace
                    &amp;
                    ecommerce responsive Html5 Template.">
            <meta name="author" content="D-THEMES">

            <!-- Favicon -->
            <link rel="stylesheet" href="assets/css/demo10.min.css">
            <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

            <!-- WebFont.js -->
            <script>
            WebFontConfig = {
                google: {
                    families: ['Poppins:400,500,600,700,800']
                }
            };
            (function(d) {
                var wf = d.createElement('script'),
                    s = d.scripts[0];
                wf.src = 'assets/js/webfont.js';
                wf.async = true;
                s.parentNode.insertBefore(wf, s);
            })(document);
            </script>
            <script>
            $(document).ready(function() {

                'use strict';

                var c, currentScrollTop = 0,
                    navbar = $('nav');

                $(window).scroll(function() {
                    var a = $(window).scrollTop();
                    var b = navbar.height();

                    currentScrollTop = a;

                    if (c < currentScrollTop && a > b + b) {
                        navbar.addClass("scrollUp");
                    } else if (c > currentScrollTop && !(a <= b)) {
                        navbar.removeClass("scrollUp");
                    }
                    c = currentScrollTop;

                    console.log(a);
                });

            });
            </script>
           <?php include 'imports.php'; ?>
    


<style>
    @charset "UTF-8";

    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        vertical-align: baseline;
    }

    html {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    img,
    fieldset,
    a img {
        border: none;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
        -webkit-appearance: none;
    }

    input[type="submit"],
    button {
        cursor: pointer;
    }

    input[type="submit"]::-moz-focus-inner,
    button::-moz-focus-inner {
        padding: 0;
        border: 0;
    }

    textarea {
        overflow: auto;
    }

    input,
    button {
        margin: 0;
        padding: 0;
        border: 0;
    }

    div,
    input,
    textarea,
    select,
    button,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    a,
    span,
    a:focus {
        outline: none;
    }

    ul,
    ol {
        list-style-type: none;
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
        width: 100%;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    /* Slider */
    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;
        overflow: hidden;
        display: block;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .senha__input {
        font-size: 1rem;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 1rem;
        width: 100%;
        background: #F4F4F4;
    }

    .botao__senha {
    width: 13%;
    padding: 8px;
    border-radius: 8px;
    background: #a97d3f;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.6;
    letter-spacing: -.02em;
    }

    .botao__senha:hover {
        background: #000000;
        color: #fff;
    }


    .slick-track {
        position: relative;
        left: 0;
        top: 0;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .slick-track:before,
    .slick-track:after {
        content: "";
        display: table;
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        float: left;
        height: 100%;
        min-height: 1px;
        display: none;
    }

    [dir="rtl"] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

    .selecionar {
        display: block;
        width: 100%;
        max-width: 201px;
        margin-right: 24px;
        margin-inline: 12px;
        padding: 8px;
    }

    .nice-select {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        background-color: #fff;
        border-radius: 5px;
        border: solid 1px #e8e8e8;
        box-sizing: border-box;
        clear: both;
        cursor: pointer;
        display: block;
        float: left;
        font-family: inherit;
        font-size: 14px;
        font-weight: normal;
        height: 42px;
        line-height: 40px;
        outline: none;
        padding-left: 18px;
        padding-right: 30px;
        position: relative;
        text-align: left !important;
        transition: all 0.2s ease-in-out;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        white-space: nowrap;
        width: auto;
    }

    .nice-select:hover {
        border-color: #dbdbdb;
    }

    .nice-select:active,
    .nice-select.open,
    .nice-select:focus {
        border-color: #999;
    }

    .nice-select:after {
        border-bottom: 2px solid #999;
        border-right: 2px solid #999;
        content: '';
        display: block;
        height: 5px;
        margin-top: -4px;
        pointer-events: none;
        position: absolute;
        right: 12px;
        top: 50%;
        -webkit-transform-origin: 66% 66%;
        transform-origin: 66% 66%;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        transition: all 0.15s ease-in-out;
        width: 5px;
    }

    .nice-select.open:after {
        -webkit-transform: rotate(-135deg);
        transform: rotate(-135deg);
    }

    .nice-select.open .list {
        opacity: 1;
        pointer-events: auto;
        -webkit-transform: scale(1) translateY(0);
        transform: scale(1) translateY(0);
    }

    .nice-select.disabled {
        border-color: #ededed;
        color: #999;
        pointer-events: none;
    }

    .nice-select.disabled:after {
        border-color: #cccccc;
    }

    .nice-select.wide {
        width: 100%;
    }

    .nice-select.wide .list {
        left: 0 !important;
        right: 0 !important;
    }

    .nice-select.right {
        float: right;
    }

    .nice-select.right .list {
        left: auto;
        right: 0;
    }

    .nice-select.small {
        font-size: 12px;
        height: 36px;
        line-height: 34px;
    }

    .nice-select.small:after {
        height: 4px;
        width: 4px;
    }

    .nice-select.small .option {
        line-height: 34px;
        min-height: 34px;
    }

    .nice-select .list {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 0 1px rgba(68, 68, 68, 0.11);
        box-sizing: border-box;
        margin-top: 4px;
        opacity: 0;
        overflow: hidden;
        padding: 0;
        pointer-events: none;
        position: absolute;
        top: 100%;
        left: 0;
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        -webkit-transform: scale(0.75) translateY(-21px);
        transform: scale(0.75) translateY(-21px);
        transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
        z-index: 9;
    }

    .nice-select .list:hover .option:not(:hover) {
        background-color: transparent !important;
    }

    .nice-select .option {
        cursor: pointer;
        font-weight: 400;
        line-height: 40px;
        list-style: none;
        min-height: 40px;
        outline: none;
        padding-left: 18px;
        padding-right: 29px;
        text-align: left;
        transition: all 0.2s;
    }

    .nice-select .option:hover,
    .nice-select .option.focus,
    .nice-select .option.selected.focus {
        background-color: #f6f6f6;
    }

    .nice-select .option.selected {
        font-weight: bold;
    }

    .nice-select .option.disabled {
        background-color: transparent;
        color: #999;
        cursor: default;
    }

    .no-csspointerevents .nice-select .list {
        display: none;
    }

    .no-csspointerevents .nice-select.open .list {
        display: block;
    }

    .tooltipster-fall,
    .tooltipster-grow.tooltipster-show {
        -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        -moz-transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.15);
        -ms-transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.15);
        -o-transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.15);
    }

    .tooltipster-base {
        display: flex;
        pointer-events: none;
        position: absolute;
    }

    .tooltipster-box {
        flex: 1 1 auto;
    }

    .tooltipster-content {
        box-sizing: border-box;
        max-height: 100%;
        max-width: 100%;
        overflow: auto;
    }

    .tooltipster-ruler {
        bottom: 0;
        left: 0;
        overflow: hidden;
        position: fixed;
        right: 0;
        top: 0;
        visibility: hidden;
    }

    .tooltipster-fade {
        opacity: 0;
        transition-property: opacity;
    }

    .tooltipster-fade.tooltipster-show {
        opacity: 1;
    }

    .tooltipster-grow {
        -webkit-transform: scale(0, 0);
        transform: scale(0, 0);
        transition-property: -webkit-transform;
        transition-property: transform;
        transition-property: transform, -webkit-transform;
        -webkit-backface-visibility: hidden;
    }

    .tooltipster-grow.tooltipster-show {
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
        transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.15);
    }

    .tooltipster-swing {
        opacity: 0;
        -webkit-transform: rotateZ(4deg);
        transform: rotateZ(4deg);
        transition-property: -webkit-transform;
        transition-property: transform;
        transition-property: transform, -webkit-transform;
    }

    .tooltipster-swing.tooltipster-show {
        opacity: 1;
        -webkit-transform: rotateZ(0);
        transform: rotateZ(0);
        transition-timing-function: cubic-bezier(0.23, 0.635, 0.495, 2.4);
    }

    .tooltipster-fall {
        transition-property: top;
        transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.15);
    }

    .tooltipster-fall.tooltipster-initial {
        top: 0 !important;
    }

    .tooltipster-fall.tooltipster-dying {
        transition-property: all;
        top: 0 !important;
        opacity: 0;
    }

    .tooltipster-slide {
        transition-property: left;
        transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.15);
    }

    .tooltipster-slide.tooltipster-initial {
        left: -40px !important;
    }

    .tooltipster-slide.tooltipster-dying {
        transition-property: all;
        left: 0 !important;
        opacity: 0;
    }

    @-webkit-keyframes tooltipster-fading {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes tooltipster-fading {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .tooltipster-update-fade {
        -webkit-animation: tooltipster-fading .4s;
        animation: tooltipster-fading .4s;
    }

    @-webkit-keyframes tooltipster-rotating {
        25% {
            -webkit-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        75% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        100% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }
    }

    @keyframes tooltipster-rotating {
        25% {
            -webkit-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        75% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        100% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }
    }

    .tooltipster-update-rotate {
        -webkit-animation: tooltipster-rotating .6s;
        animation: tooltipster-rotating .6s;
    }

    @-webkit-keyframes tooltipster-scaling {
        50% {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes tooltipster-scaling {
        50% {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    .tooltipster-update-scale {
        -webkit-animation: tooltipster-scaling .6s;
        animation: tooltipster-scaling .6s;
    }

    .tooltipster-sidetip .tooltipster-box {
        background: #565656;
        border: 2px solid #000;
        border-radius: 4px;
    }

    .tooltipster-sidetip.tooltipster-bottom .tooltipster-box {
        margin-top: 8px;
    }

    .tooltipster-sidetip.tooltipster-left .tooltipster-box {
        margin-right: 8px;
    }

    .tooltipster-sidetip.tooltipster-right .tooltipster-box {
        margin-left: 8px;
    }

    .tooltipster-sidetip.tooltipster-top .tooltipster-box {
        margin-bottom: 8px;
    }

    .tooltipster-sidetip .tooltipster-content {
        color: #fff;
        line-height: 18px;
        padding: 6px 14px;
    }

    .tooltipster-sidetip .tooltipster-arrow {
        overflow: hidden;
        position: absolute;
    }

    .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow {
        height: 10px;
        margin-left: -10px;
        top: 0;
        width: 20px;
    }

    .tooltipster-sidetip.tooltipster-left .tooltipster-arrow {
        height: 20px;
        margin-top: -10px;
        right: 0;
        top: 0;
        width: 10px;
    }

    .tooltipster-sidetip.tooltipster-right .tooltipster-arrow {
        height: 20px;
        margin-top: -10px;
        left: 0;
        top: 0;
        width: 10px;
    }

    .tooltipster-sidetip.tooltipster-top .tooltipster-arrow {
        bottom: 0;
        height: 10px;
        margin-left: -10px;
        width: 20px;
    }

    .tooltipster-sidetip .tooltipster-arrow-background,
    .tooltipster-sidetip .tooltipster-arrow-border {
        height: 0;
        position: absolute;
        width: 0;
    }

    .tooltipster-sidetip .tooltipster-arrow-background {
        border: 10px solid transparent;
    }

    .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-background {
        border-bottom-color: #565656;
        left: 0;
        top: 3px;
    }

    .tooltipster-sidetip.tooltipster-left .tooltipster-arrow-background {
        border-left-color: #565656;
        left: -3px;
        top: 0;
    }

    .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-background {
        border-right-color: #565656;
        left: 3px;
        top: 0;
    }

    .tooltipster-sidetip.tooltipster-top .tooltipster-arrow-background {
        border-top-color: #565656;
        left: 0;
        top: -3px;
    }

    .tooltipster-sidetip .tooltipster-arrow-border {
        border: 10px solid transparent;
        left: 0;
        top: 0;
    }

    .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-border {
        border-bottom-color: #000;
    }

    .tooltipster-sidetip.tooltipster-left .tooltipster-arrow-border {
        border-left-color: #000;
    }

    .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-border {
        border-right-color: #000;
    }

    .tooltipster-sidetip.tooltipster-top .tooltipster-arrow-border {
        border-top-color: #000;
    }

    .tooltipster-sidetip .tooltipster-arrow-uncropped {
        position: relative;
    }

    .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-uncropped {
        top: -10px;
    }

    .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-uncropped {
        left: -10px;
    }

    /*
 RichText: WYSIWYG editor developed as jQuery plugin

 @name RichText
 @author https://github.com/webfashionist - Bob Schockweiler - richtext@webfashion.eu

 Copyright (C) 2020 Bob Schockweiler ( richtext@webfashion.eu )

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU Affero General Public License as published
 by the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU Affero General Public License for more details.

 You should have received a copy of the GNU Affero General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
    .richText {
        position: relative;
        background-color: #FAFAFA;
        border: #EFEFEF solid 1px;
        color: #333333;
        width: 100%;
    }

    .richText .richText-form {
        font-family: Calibri, Verdana, Helvetica, sans-serif;
    }

    .richText .richText-form label {
        display: block;
        padding: 10px 15px;
    }

    .richText .richText-form input[type="text"],
    .richText .richText-form input[type="file"],
    .richText .richText-form input[type="number"],
    .richText .richText-form select {
        padding: 10px 15px;
        border: #999999 solid 1px;
        min-width: 200px;
        width: 100%;
    }

    .richText .richText-form select {
        cursor: pointer;
    }

    .richText .richText-form button {
        margin: 10px 0;
        padding: 10px 15px;
        background-color: #3498db;
        border: none;
        color: #FAFAFA;
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 4px;
    }

    .richText .richText-toolbar {
        min-height: 20px;
        border-bottom: #EFEFEF solid 1px;
    }

    .richText .richText-toolbar .richText-length {
        font-family: Verdana, Helvetica, sans-serif;
        font-size: 13px;
        vertical-align: middle;
        line-height: 34px;
    }

    .richText .richText-toolbar .richText-length .black {
        color: #000;
    }

    .richText .richText-toolbar .richText-length .orange {
        color: orange;
    }

    .richText .richText-toolbar .richText-length .red {
        color: red;
    }

    .richText .richText-toolbar ul {
        padding-left: 0;
        padding-right: 0;
        margin-top: 0;
        margin-bottom: 0;
    }

    .richText .richText-toolbar ul li {
        float: left;
        display: block;
        list-style: none;
    }

    .richText .richText-toolbar ul li a {
        display: block;
        padding: 10px 13px;
        border-right: #EFEFEF solid 1px;
        cursor: pointer;
        transition: background-color 0.4s;
    }

    .richText .richText-toolbar ul li a .fa,
    .richText .richText-toolbar ul li a .fas,
    .richText .richText-toolbar ul li a .far,
    .richText .richText-toolbar ul li a svg {
        pointer-events: none;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.3);
        cursor: default;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer .richText-dropdown {
        position: relative;
        display: block;
        margin: 3% auto 0 auto;
        background-color: #FAFAFA;
        border: #EFEFEF solid 1px;
        min-width: 100px;
        width: 300px;
        max-width: 90%;
        box-shadow: 0 0 5px 0 #333;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer .richText-dropdown .richText-dropdown-close {
        position: absolute;
        top: 0;
        right: -23px;
        background: #FFF;
        color: #333;
        cursor: pointer;
        font-size: 20px;
        text-align: center;
        width: 20px;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer ul.richText-dropdown {
        list-style: none;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer ul.richText-dropdown li {
        display: block;
        float: none;
        font-family: Calibri, Verdana, Helvetica, sans-serif;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer ul.richText-dropdown li a {
        display: block;
        padding: 10px 15px;
        border-bottom: #EFEFEF solid 1px;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer ul.richText-dropdown li a:hover {
        background-color: #FFFFFF;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer ul.richText-dropdown li.inline {
        margin: 10px 6px;
        float: left;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer ul.richText-dropdown li.inline a {
        display: block;
        padding: 0;
        margin: 0;
        border: none;
        border-radius: 50%;
        box-shadow: 0 0 10px 0 #999;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer ul.richText-dropdown li.inline a span {
        display: block;
        height: 30px;
        width: 30px;
        border-radius: 50%;
    }

    .richText .richText-toolbar ul li a .richText-dropdown-outer div.richText-dropdown {
        padding: 10px 15px;
    }

    .richText .richText-toolbar ul li a:hover {
        background-color: #FFFFFF;
    }

    .richText .richText-toolbar ul li[data-disable="true"] {
        opacity: 0.1;
    }

    .richText .richText-toolbar ul li[data-disable="true"] a {
        cursor: default;
    }

    .richText .richText-toolbar ul li:not([data-disable="true"]).is-selected .richText-dropdown-outer {
        display: block;
    }

    .richText .richText-toolbar ul:after {
        display: block;
        content: "";
        clear: both;
    }

    .richText .richText-toolbar:last-child {
        font-size: 12px;
    }

    .richText .richText-toolbar:after {
        display: block;
        clear: both;
        content: "";
    }

    .richText .richText-editor {
        padding: 20px;
        background-color: #FFFFFF;
        border-left: #FFFFFF solid 2px;
        font-family: Calibri, Verdana, Helvetica, sans-serif;
        height: 300px;
        outline: none;
        overflow-y: scroll;
        overflow-x: auto;
    }

    .richText .richText-editor ul,
    .richText .richText-editor ol {
        margin: 10px 25px;
    }

    .richText .richText-editor table {
        margin: 10px 0;
        border-spacing: 0;
        width: 100%;
    }

    .richText .richText-editor table td,
    .richText .richText-editor table th {
        padding: 10px;
        border: #EFEFEF solid 1px;
    }

    .richText .richText-editor:focus {
        border-left: #3498db solid 2px;
    }

    .richText .richText-initial {
        margin-bottom: -4px;
        padding: 10px;
        background-color: #282828;
        border: none;
        color: #33FF33;
        font-family: Monospace, Calibri, Verdana, Helvetica, sans-serif;
        max-width: 100%;
        min-width: 100%;
        width: 100%;
        min-height: 400px;
        height: 400px;
    }

    .richText .richText-help {
        float: right;
        display: block;
        padding: 10px 15px;
        cursor: pointer;
    }

    .richText .richText-undo,
    .richText .richText-redo {
        float: left;
        display: block;
        padding: 10px 15px;
        border-right: #EFEFEF solid 1px;
        cursor: pointer;
    }

    .richText .richText-undo.is-disabled,
    .richText .richText-redo.is-disabled {
        opacity: 0.4;
    }

    .richText .richText-help-popup a {
        color: #3498db;
        text-decoration: underline;
    }

    .richText .richText-help-popup hr {
        margin: 10px auto 5px auto;
        border: none;
        border-top: #EFEFEF solid 1px;
    }

    .richText .richText-list.list-rightclick {
        position: absolute;
        background-color: #FAFAFA;
        border-right: #EFEFEF solid 1px;
        border-bottom: #EFEFEF solid 1px;
    }

    .richText .richText-list.list-rightclick li {
        padding: 5px 7px;
        cursor: pointer;
        list-style: none;
    }

    body.compensate-for-scrollbar {
        overflow: hidden;
    }

    .fancybox-active {
        height: auto;
    }

    .fancybox-is-hidden {
        left: -9999px;
        margin: 0;
        position: absolute !important;
        top: -9999px;
        visibility: hidden;
    }

    .fancybox-container {
        -webkit-backface-visibility: hidden;
        height: 100%;
        left: 0;
        outline: none;
        position: fixed;
        -webkit-tap-highlight-color: transparent;
        top: 0;
        touch-action: manipulation;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        width: 100%;
        z-index: 99992;
    }

    .fancybox-container * {
        box-sizing: border-box;
    }

    .fancybox-bg,
    .fancybox-inner,
    .fancybox-outer,
    .fancybox-stage {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }

    .fancybox-outer {
        -webkit-overflow-scrolling: touch;
        overflow-y: auto;
    }

    .fancybox-bg {
        background: #1e1e1e;
        opacity: 0;
        transition-duration: inherit;
        transition-property: opacity;
        transition-timing-function: cubic-bezier(0.47, 0, 0.74, 0.71);
    }

    .fancybox-is-open .fancybox-bg {
        opacity: .9;
        transition-timing-function: cubic-bezier(0.22, 0.61, 0.36, 1);
    }

    .fancybox-caption,
    .fancybox-infobar,
    .fancybox-navigation .fancybox-button,
    .fancybox-toolbar {
        direction: ltr;
        opacity: 0;
        position: absolute;
        transition: opacity .25s ease, visibility 0s ease .25s;
        visibility: hidden;
        z-index: 99997;
    }

    .fancybox-show-caption .fancybox-caption,
    .fancybox-show-infobar .fancybox-infobar,
    .fancybox-show-nav .fancybox-navigation .fancybox-button,
    .fancybox-show-toolbar .fancybox-toolbar {
        opacity: 1;
        transition: opacity .25s ease 0s, visibility 0s ease 0s;
        visibility: visible;
    }

    .fancybox-infobar {
        color: #ccc;
        font-size: 13px;
        -webkit-font-smoothing: subpixel-antialiased;
        height: 44px;
        left: 0;
        line-height: 44px;
        min-width: 44px;
        mix-blend-mode: difference;
        padding: 0 10px;
        pointer-events: none;
        top: 0;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .fancybox-toolbar {
        right: 0;
        top: 0;
    }

    .fancybox-stage {
        direction: ltr;
        overflow: visible;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        z-index: 99994;
    }

    .fancybox-is-open .fancybox-stage {
        overflow: hidden;
    }

    .fancybox-slide {
        -webkit-backface-visibility: hidden;
        display: none;
        height: 100%;
        left: 0;
        outline: none;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        padding: 44px;
        position: absolute;
        text-align: center;
        top: 0;
        transition-property: opacity, -webkit-transform;
        transition-property: transform, opacity;
        transition-property: transform, opacity, -webkit-transform;
        white-space: normal;
        width: 100%;
        z-index: 99994;
    }

    .fancybox-slide:before {
        content: "";
        display: inline-block;
        font-size: 0;
        height: 100%;
        vertical-align: middle;
        width: 0;
    }

    .fancybox-is-sliding .fancybox-slide,
    .fancybox-slide--current,
    .fancybox-slide--next,
    .fancybox-slide--previous {
        display: block;
    }

    .fancybox-slide--image {
        overflow: hidden;
        padding: 44px 0;
    }

    .fancybox-slide--image:before {
        display: none;
    }

    .fancybox-slide--html {
        padding: 6px;
    }

    .fancybox-content {
        background: #fff;
        display: inline-block;
        margin: 0;
        max-width: 100%;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        padding: 44px;
        position: relative;
        text-align: left;
        vertical-align: middle;
    }

    .fancybox-slide--image .fancybox-content {
        -webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.14, 1);
        animation-timing-function: cubic-bezier(0.5, 0, 0.14, 1);
        -webkit-backface-visibility: hidden;
        background: transparent;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        left: 0;
        max-width: none;
        overflow: visible;
        padding: 0;
        position: absolute;
        top: 0;
        -webkit-transform-origin: top left;
        transform-origin: top left;
        transition-property: opacity, -webkit-transform;
        transition-property: transform, opacity;
        transition-property: transform, opacity, -webkit-transform;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        z-index: 99995;
    }

    .fancybox-can-zoomOut .fancybox-content {
        cursor: -webkit-zoom-out;
        cursor: zoom-out;
    }

    .fancybox-can-zoomIn .fancybox-content {
        cursor: -webkit-zoom-in;
        cursor: zoom-in;
    }

    .fancybox-can-pan .fancybox-content,
    .fancybox-can-swipe .fancybox-content {
        cursor: -webkit-grab;
        cursor: grab;
    }

    .fancybox-is-grabbing .fancybox-content {
        cursor: -webkit-grabbing;
        cursor: grabbing;
    }

    .fancybox-container [data-selectable=true] {
        cursor: text;
    }

    .fancybox-image,
    .fancybox-spaceball {
        background: transparent;
        border: 0;
        height: 100%;
        left: 0;
        margin: 0;
        max-height: none;
        max-width: none;
        padding: 0;
        position: absolute;
        top: 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        width: 100%;
    }

    .fancybox-spaceball {
        z-index: 1;
    }

    .fancybox-slide--iframe .fancybox-content,
    .fancybox-slide--map .fancybox-content,
    .fancybox-slide--pdf .fancybox-content,
    .fancybox-slide--video .fancybox-content {
        height: 100%;
        overflow: visible;
        padding: 0;
        width: 100%;
    }

    .fancybox-slide--video .fancybox-content {
        background: #000;
    }

    .fancybox-slide--map .fancybox-content {
        background: #e5e3df;
    }

    .fancybox-slide--iframe .fancybox-content {
        background: #fff;
    }

    .fancybox-iframe,
    .fancybox-video {
        background: transparent;
        border: 0;
        display: block;
        height: 100%;
        margin: 0;
        overflow: hidden;
        padding: 0;
        width: 100%;
    }

    .fancybox-iframe {
        left: 0;
        position: absolute;
        top: 0;
    }

    .fancybox-error {
        background: #fff;
        cursor: default;
        max-width: 400px;
        padding: 40px;
        width: 100%;
    }

    .fancybox-error p {
        color: #444;
        font-size: 16px;
        line-height: 20px;
        margin: 0;
        padding: 0;
    }

    .fancybox-button {
        background: rgba(30, 30, 30, 0.6);
        border: 0;
        border-radius: 0;
        box-shadow: none;
        cursor: pointer;
        display: inline-block;
        height: 44px;
        margin: 0;
        padding: 10px;
        position: relative;
        transition: color .2s;
        vertical-align: top;
        visibility: inherit;
        width: 44px;
    }

    .fancybox-button,
    .fancybox-button:link,
    .fancybox-button:visited {
        color: #ccc;
    }

    .fancybox-button:hover {
        color: #fff;
    }

    .fancybox-button:focus {
        outline: none;
    }

    .fancybox-button.fancybox-focus {
        outline: 1px dotted;
    }

    .fancybox-button[disabled],
    .fancybox-button[disabled]:hover {
        color: #888;
        cursor: default;
        outline: none;
    }

    .fancybox-button div {
        height: 100%;
    }

    .fancybox-button svg {
        display: block;
        height: 100%;
        overflow: visible;
        position: relative;
        width: 100%;
    }

    .fancybox-button svg path {
        fill: currentColor;
        stroke-width: 0;
    }

    .fancybox-button--fsenter svg:nth-child(2),
    .fancybox-button--fsexit svg:first-child,
    .fancybox-button--pause svg:first-child,
    .fancybox-button--play svg:nth-child(2) {
        display: none;
    }

    .fancybox-progress {
        background: #ff5268;
        height: 2px;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: 0;
        transform-origin: 0;
        transition-property: -webkit-transform;
        transition-property: transform;
        transition-property: transform, -webkit-transform;
        transition-timing-function: linear;
        z-index: 99998;
    }

    .fancybox-close-small {
        background: transparent;
        border: 0;
        border-radius: 0;
        color: #ccc;
        cursor: pointer;
        opacity: .8;
        padding: 8px;
        position: absolute;
        right: -12px;
        top: -44px;
        z-index: 401;
    }

    .fancybox-close-small:hover {
        color: #fff;
        opacity: 1;
    }

    .fancybox-slide--html .fancybox-close-small {
        color: currentColor;
        padding: 10px;
        right: 0;
        top: 0;
    }

    .fancybox-slide--image.fancybox-is-scaling .fancybox-content {
        overflow: hidden;
    }

    .fancybox-is-scaling .fancybox-close-small,
    .fancybox-is-zoomable.fancybox-can-pan .fancybox-close-small {
        display: none;
    }

    .fancybox-navigation .fancybox-button {
        background-clip: content-box;
        height: 100px;
        opacity: 0;
        position: absolute;
        top: calc(50% - 50px);
        width: 70px;
    }

    .fancybox-navigation .fancybox-button div {
        padding: 7px;
    }

    .fancybox-navigation .fancybox-button--arrow_left {
        left: 0;
        left: env(safe-area-inset-left);
        padding: 31px 26px 31px 6px;
    }

    .fancybox-navigation .fancybox-button--arrow_right {
        padding: 31px 6px 31px 26px;
        right: 0;
        right: env(safe-area-inset-right);
    }

    .fancybox-caption {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.85) 0, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.15) 65%, rgba(0, 0, 0, 0.075) 75.5%, rgba(0, 0, 0, 0.037) 82.85%, rgba(0, 0, 0, 0.019) 88%, transparent);
        bottom: 0;
        color: #eee;
        font-size: 14px;
        font-weight: 400;
        left: 0;
        line-height: 1.5;
        padding: 75px 44px 25px;
        pointer-events: none;
        right: 0;
        text-align: center;
        z-index: 99996;
    }

    @supports (padding: max(0px)) {
        .fancybox-caption {
            padding: 75px max(44px, env(safe-area-inset-right)) max(25px, env(safe-area-inset-bottom)) max(44px, env(safe-area-inset-left));
        }
    }

    .fancybox-caption--separate {
        margin-top: -50px;
    }

    .fancybox-caption__body {
        max-height: 50vh;
        overflow: auto;
        pointer-events: all;
    }

    .fancybox-caption a,
    .fancybox-caption a:link,
    .fancybox-caption a:visited {
        color: #ccc;
        text-decoration: none;
    }

    .fancybox-caption a:hover {
        color: #fff;
        text-decoration: underline;
    }

    .fancybox-loading {
        -webkit-animation: a 1s linear infinite;
        animation: a 1s linear infinite;
        background: transparent;
        border: 4px solid #888;
        border-bottom-color: #fff;
        border-radius: 50%;
        height: 50px;
        left: 50%;
        margin: -25px 0 0 -25px;
        opacity: .7;
        padding: 0;
        position: absolute;
        top: 50%;
        width: 50px;
        z-index: 99999;
    }

    @-webkit-keyframes a {
        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn);
        }
    }

    @keyframes a {
        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn);
        }
    }

    .fancybox-animated {
        transition-timing-function: cubic-bezier(0, 0, 0.25, 1);
    }

    .fancybox-fx-slide.fancybox-slide--previous {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }

    .fancybox-fx-slide.fancybox-slide--next {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }

    .fancybox-fx-slide.fancybox-slide--current {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }

    .fancybox-fx-fade.fancybox-slide--next,
    .fancybox-fx-fade.fancybox-slide--previous {
        opacity: 0;
        transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1);
    }

    .fancybox-fx-fade.fancybox-slide--current {
        opacity: 1;
    }

    .fancybox-fx-zoom-in-out.fancybox-slide--previous {
        opacity: 0;
        -webkit-transform: scale3d(1.5, 1.5, 1.5);
        transform: scale3d(1.5, 1.5, 1.5);
    }

    .fancybox-fx-zoom-in-out.fancybox-slide--next {
        opacity: 0;
        -webkit-transform: scale3d(0.5, 0.5, 0.5);
        transform: scale3d(0.5, 0.5, 0.5);
    }

    .fancybox-fx-zoom-in-out.fancybox-slide--current {
        opacity: 1;
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }

    .fancybox-fx-rotate.fancybox-slide--previous {
        opacity: 0;
        -webkit-transform: rotate(-1turn);
        transform: rotate(-1turn);
    }

    .fancybox-fx-rotate.fancybox-slide--next {
        opacity: 0;
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn);
    }

    .fancybox-fx-rotate.fancybox-slide--current {
        opacity: 1;
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    .fancybox-fx-circular.fancybox-slide--previous {
        opacity: 0;
        -webkit-transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);
        transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);
    }

    .fancybox-fx-circular.fancybox-slide--next {
        opacity: 0;
        -webkit-transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);
        transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);
    }

    .fancybox-fx-circular.fancybox-slide--current {
        opacity: 1;
        -webkit-transform: scaleX(1) translateZ(0);
        transform: scaleX(1) translateZ(0);
    }

    .fancybox-fx-tube.fancybox-slide--previous {
        -webkit-transform: translate3d(-100%, 0, 0) scale(0.1) skew(-10deg);
        transform: translate3d(-100%, 0, 0) scale(0.1) skew(-10deg);
    }

    .fancybox-fx-tube.fancybox-slide--next {
        -webkit-transform: translate3d(100%, 0, 0) scale(0.1) skew(10deg);
        transform: translate3d(100%, 0, 0) scale(0.1) skew(10deg);
    }

    .fancybox-fx-tube.fancybox-slide--current {
        -webkit-transform: translateZ(0) scale(1);
        transform: translateZ(0) scale(1);
    }

    @media (max-height: 576px) {
        .fancybox-slide {
            padding-left: 6px;
            padding-right: 6px;
        }

        .fancybox-slide--image {
            padding: 6px 0;
        }

        .fancybox-close-small {
            right: -6px;
        }

        .fancybox-slide--image .fancybox-close-small {
            background: #4e4e4e;
            color: #f2f4f6;
            height: 36px;
            opacity: 1;
            padding: 6px;
            right: 0;
            top: 0;
            width: 36px;
        }

        .fancybox-caption {
            padding-left: 12px;
            padding-right: 12px;
        }

        @supports (padding: max(0px)) {
            .fancybox-caption {
                padding-left: max(12px, env(safe-area-inset-left));
                padding-right: max(12px, env(safe-area-inset-right));
            }
        }
    }

    .fancybox-share {
        background: #f4f4f4;
        border-radius: 3px;
        max-width: 90%;
        padding: 30px;
        text-align: center;
    }

    .fancybox-share h1 {
        color: #222;
        font-size: 35px;
        font-weight: 700;
        margin: 0 0 20px;
    }

    .fancybox-share p {
        margin: 0;
        padding: 0;
    }

    .fancybox-share__button {
        border: 0;
        border-radius: 3px;
        display: inline-block;
        font-size: 14px;
        font-weight: 700;
        line-height: 40px;
        margin: 0 5px 10px;
        min-width: 130px;
        padding: 0 15px;
        text-decoration: none;
        transition: all .2s;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        white-space: nowrap;
    }

    .fancybox-share__button:link,
    .fancybox-share__button:visited {
        color: #fff;
    }

    .fancybox-share__button:hover {
        text-decoration: none;
    }

    .fancybox-share__button--fb {
        background: #3b5998;
    }

    .fancybox-share__button--fb:hover {
        background: #344e86;
    }

    .fancybox-share__button--pt {
        background: #bd081d;
    }

    .fancybox-share__button--pt:hover {
        background: #aa0719;
    }

    .fancybox-share__button--tw {
        background: #1da1f2;
    }

    .fancybox-share__button--tw:hover {
        background: #0d95e8;
    }

    .fancybox-share__button svg {
        height: 25px;
        margin-right: 7px;
        position: relative;
        top: -1px;
        vertical-align: middle;
        width: 25px;
    }

    .fancybox-share__button svg path {
        fill: #fff;
    }

    .fancybox-share__input {
        background: transparent;
        border: 0;
        border-bottom: 1px solid #d7d7d7;
        border-radius: 0;
        color: #5d5b5b;
        font-size: 14px;
        margin: 10px 0 0;
        outline: none;
        padding: 10px 15px;
        width: 100%;
    }

    .fancybox-thumbs {
        background: #ddd;
        bottom: 0;
        display: none;
        margin: 0;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        padding: 2px 2px 4px;
        position: absolute;
        right: 0;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        top: 0;
        width: 212px;
        z-index: 99995;
    }

    .fancybox-thumbs-x {
        overflow-x: auto;
        overflow-y: hidden;
    }

    .fancybox-show-thumbs .fancybox-thumbs {
        display: block;
    }

    .fancybox-show-thumbs .fancybox-inner {
        right: 212px;
    }

    .fancybox-thumbs__list {
        font-size: 0;
        height: 100%;
        list-style: none;
        margin: 0;
        overflow-x: hidden;
        overflow-y: auto;
        padding: 0;
        position: absolute;
        position: relative;
        white-space: nowrap;
        width: 100%;
    }

    .fancybox-thumbs-x .fancybox-thumbs__list {
        overflow: hidden;
    }

    .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar {
        width: 7px;
    }

    .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-track {
        background: #fff;
        border-radius: 10px;
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-thumb {
        background: #2a2a2a;
        border-radius: 10px;
    }

    .fancybox-thumbs__list a {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        background-color: rgba(0, 0, 0, 0.1);
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        cursor: pointer;
        float: left;
        height: 75px;
        margin: 2px;
        max-height: calc(100% - 8px);
        max-width: calc(50% - 4px);
        outline: none;
        overflow: hidden;
        padding: 0;
        position: relative;
        -webkit-tap-highlight-color: transparent;
        width: 100px;
    }

    .fancybox-thumbs__list a:before {
        border: 6px solid #ff5268;
        bottom: 0;
        content: "";
        left: 0;
        opacity: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 99991;
    }

    .fancybox-thumbs__list a:focus:before {
        opacity: .5;
    }

    .fancybox-thumbs__list a.fancybox-thumbs-active:before {
        opacity: 1;
    }

    @media (max-width: 576px) {
        .fancybox-thumbs {
            width: 110px;
        }

        .fancybox-show-thumbs .fancybox-inner {
            right: 110px;
        }

        .fancybox-thumbs__list a {
            max-width: calc(100% - 10px);
        }
    }

    :root {
        --tagify-dd-color-primary: rgb(53, 149, 246);
        --tagify-dd-bg-color: white;
    }

    .tagify {
        --tags-disabled-bg: #F1F1F1;
        --tags-border-color: #DDD;
        --tags-hover-border-color: #CCC;
        --tags-focus-border-color: #3595f6;
        --tag-bg: #E5E5E5;
        --tag-hover: #D3E2E2;
        --tag-text-color: black;
        --tag-text-color--edit: black;
        --tag-pad: 0.3em 0.5em;
        --tag-inset-shadow-size: 1.1em;
        --tag-invalid-color: #D39494;
        --tag-invalid-bg: rgba(211, 148, 148, 0.5);
        --tag-remove-bg: rgba(211, 148, 148, 0.3);
        --tag-remove-btn-color: black;
        --tag-remove-btn-bg: none;
        --tag-remove-btn-bg--hover: #c77777;
        --input-color: inherit;
        --tag--min-width: 1ch;
        --tag--max-width: auto;
        --tag-hide-transition: 0.3s;
        --placeholder-color: rgba(0, 0, 0, 0.4);
        --placeholder-color-focus: rgba(0, 0, 0, 0.25);
        --loader-size: .8em;
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
        border: 1px solid #ddd;
        border: 1px solid var(--tags-border-color);
        padding: 0;
        line-height: 0;
        cursor: text;
        outline: 0;
        position: relative;
        box-sizing: border-box;
        transition: .1s;
    }

    @-webkit-keyframes tags--bump {
        30% {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
    }

    @keyframes tags--bump {
        30% {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
    }

    @-webkit-keyframes rotateLoader {
        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn);
        }
    }

    @keyframes rotateLoader {
        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn);
        }
    }

    .tagify:hover {
        border-color: #ccc;
        border-color: var(--tags-hover-border-color);
    }

    .tagify.tagify--focus {
        transition: 0s;
        border-color: #3595f6;
        border-color: var(--tags-focus-border-color);
    }

    .tagify[disabled] {
        background: var(--tags-disabled-bg);
        -webkit-filter: saturate(0);
        filter: saturate(0);
        opacity: .5;
        pointer-events: none;
    }

    .tagify[readonly].tagify--select {
        pointer-events: none;
    }

    .tagify[readonly]:not(.tagify--mix):not(.tagify--select) {
        cursor: default;
    }

    .tagify[readonly]:not(.tagify--mix):not(.tagify--select)>.tagify__input {
        visibility: hidden;
        width: 0;
        margin: 5px 0;
    }

    .tagify[readonly]:not(.tagify--mix):not(.tagify--select) .tagify__tag>div {
        padding: .3em .5em;
        padding: var(--tag-pad);
    }

    .tagify[readonly]:not(.tagify--mix):not(.tagify--select) .tagify__tag>div::before {
        background: linear-gradient(45deg, var(--tag-bg) 25%, transparent 25%, transparent 50%, var(--tag-bg) 50%, var(--tag-bg) 75%, transparent 75%, transparent) 0/5px 5px;
        box-shadow: none;
        -webkit-filter: brightness(0.95);
        filter: brightness(0.95);
    }

    .tagify[readonly] .tagify__tag__removeBtn {
        display: none;
    }

    .tagify--loading .tagify__input>br:last-child {
        display: none;
    }

    .tagify--loading .tagify__input::before {
        content: none;
    }

    .tagify--loading .tagify__input::after {
        content: "";
        vertical-align: middle;
        opacity: 1;
        width: .7em;
        height: .7em;
        width: var(--loader-size);
        height: var(--loader-size);
        border: 3px solid;
        border-color: #eee #bbb #888 transparent;
        border-radius: 50%;
        -webkit-animation: rotateLoader .4s infinite linear;
        animation: rotateLoader .4s infinite linear;
        content: "" !important;
        margin: -2px 0 -2px .5em;
    }

    .tagify--loading .tagify__input:empty::after {
        margin-left: 0;
    }

    .tagify+input,
    .tagify+textarea {
        position: absolute !important;
        left: -9999em !important;
        -webkit-transform: scale(0) !important;
        transform: scale(0) !important;
    }

    .tagify__tag {
        display: inline-flex;
        align-items: center;
        margin: 5px 0 5px 5px;
        position: relative;
        z-index: 1;
        outline: 0;
        line-height: normal;
        cursor: default;
        transition: .13s ease-out;
    }

    .tagify__tag>div {
        vertical-align: top;
        box-sizing: border-box;
        max-width: 100%;
        padding: .3em .5em;
        padding: var(--tag-pad, 0.3em 0.5em);
        color: #000;
        color: var(--tag-text-color, #000);
        line-height: inherit;
        border-radius: 3px;
        white-space: nowrap;
        transition: .13s ease-out;
    }

    .tagify__tag>div>* {
        white-space: pre-wrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        vertical-align: top;
        min-width: 1ch;
        max-width: auto;
        min-width: var(--tag--min-width, 1ch);
        max-width: var(--tag--max-width, auto);
        transition: .8s ease, .1s color;
    }

    .tagify__tag>div>[contenteditable] {
        outline: 0;
        -webkit-user-select: text;
        -moz-user-select: text;
        -ms-user-select: text;
        user-select: text;
        cursor: text;
        margin: -2px;
        padding: 2px;
        max-width: 350px;
    }

    .tagify__tag>div::before {
        content: "";
        position: absolute;
        border-radius: inherit;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
        pointer-events: none;
        transition: 120ms ease;
        -webkit-animation: tags--bump .3s ease-out 1;
        animation: tags--bump .3s ease-out 1;
        box-shadow: 0 0 0 1.1em #e5e5e5 inset;
        box-shadow: 0 0 0 var(--tag-inset-shadow-size, 1.1em) var(--tag-bg, #e5e5e5) inset;
    }

    .tagify__tag:focus div::before,
    .tagify__tag:hover:not([readonly]) div::before {
        top: -2px;
        right: -2px;
        bottom: -2px;
        left: -2px;
        box-shadow: 0 0 0 1.1em #d3e2e2 inset;
        box-shadow: 0 0 0 var(--tag-inset-shadow-size, 1.1em) var(--tag-hover, #d3e2e2) inset;
    }

    .tagify__tag--loading {
        pointer-events: none;
    }

    .tagify__tag--loading .tagify__tag__removeBtn {
        display: none;
    }

    .tagify__tag--loading::after {
        --loader-size: .4em;
        content: "";
        vertical-align: middle;
        opacity: 1;
        width: .7em;
        height: .7em;
        width: var(--loader-size);
        height: var(--loader-size);
        border: 3px solid;
        border-color: #eee #bbb #888 transparent;
        border-radius: 50%;
        -webkit-animation: rotateLoader .4s infinite linear;
        animation: rotateLoader .4s infinite linear;
        margin: 0 .5em 0 -.1em;
    }

    .tagify__tag--flash div::before {
        -webkit-animation: none;
        animation: none;
    }

    .tagify__tag--hide {
        width: 0 !important;
        padding-left: 0;
        padding-right: 0;
        margin-left: 0;
        margin-right: 0;
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
        transition: .3s;
        transition: var(--tag-hide-transition, 0.3s);
        pointer-events: none;
    }

    .tagify__tag--hide>div>* {
        white-space: nowrap;
    }

    .tagify__tag.tagify--noAnim>div::before {
        -webkit-animation: none;
        animation: none;
    }

    .tagify__tag.tagify--notAllowed:not(.tagify__tag--editable) div>span {
        opacity: .5;
    }

    .tagify__tag.tagify--notAllowed:not(.tagify__tag--editable) div::before {
        box-shadow: 0 0 0 1.1em rgba(211, 148, 148, 0.5) inset !important;
        box-shadow: 0 0 0 var(--tag-inset-shadow-size, 1.1em) var(--tag-invalid-bg, rgba(211, 148, 148, 0.5)) inset !important;
        transition: .2s;
    }

    .tagify__tag[readonly] .tagify__tag__removeBtn {
        display: none;
    }

    .tagify__tag[readonly]>div::before {
        background: linear-gradient(45deg, var(--tag-bg) 25%, transparent 25%, transparent 50%, var(--tag-bg) 50%, var(--tag-bg) 75%, transparent 75%, transparent) 0/5px 5px;
        box-shadow: none;
        -webkit-filter: brightness(0.95);
        filter: brightness(0.95);
    }

    .tagify__tag--editable>div {
        color: #000;
        color: var(--tag-text-color--edit, #000);
    }

    .tagify__tag--editable>div::before {
        box-shadow: 0 0 0 2px #d3e2e2 inset !important;
        box-shadow: 0 0 0 2px var(--tag-hover, #d3e2e2) inset !important;
    }

    .tagify__tag--editable>.tagify__tag__removeBtn {
        pointer-events: none;
    }

    .tagify__tag--editable>.tagify__tag__removeBtn::after {
        opacity: 0;
        -webkit-transform: translateX(100%) translateX(5px);
        transform: translateX(100%) translateX(5px);
    }

    .tagify__tag--editable.tagify--invalid>div::before {
        box-shadow: 0 0 0 2px #d39494 inset !important;
        box-shadow: 0 0 0 2px var(--tag-invalid-color, #d39494) inset !important;
    }

    .tagify__tag__removeBtn {
        order: 5;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50px;
        cursor: pointer;
        font: 14px/1 Arial;
        background: 0 0;
        background: var(--tag-remove-btn-bg, none);
        color: #000;
        color: var(--tag-remove-btn-color, #000);
        width: 14px;
        height: 14px;
        margin-right: 4.6666666667px;
        margin-left: auto;
        overflow: hidden;
        transition: .2s ease-out;
    }

    .tagify__tag__removeBtn::after {
        content: "×";
        transition: .3s, color 0s;
    }

    .tagify__tag__removeBtn:hover {
        color: #fff;
        background: #c77777;
        background: var(--tag-remove-btn-bg--hover, #c77777);
    }

    .tagify__tag__removeBtn:hover+div>span {
        opacity: .5;
    }

    .tagify__tag__removeBtn:hover+div::before {
        box-shadow: 0 0 0 1.1em rgba(211, 148, 148, 0.3) inset !important;
        box-shadow: 0 0 0 var(--tag-inset-shadow-size, 1.1em) var(--tag-remove-bg, rgba(211, 148, 148, 0.3)) inset !important;
        transition: box-shadow .2s;
    }

    .tagify:not(.tagify--mix) .tagify__input br {
        display: none;
    }

    .tagify:not(.tagify--mix) .tagify__input * {
        display: inline;
        white-space: nowrap;
    }

    .tagify__input {
        flex-grow: 1;
        display: inline-block;
        min-width: 110px;
        margin: 5px;
        padding: .3em .5em;
        padding: var(--tag-pad, 0.3em 0.5em);
        line-height: normal;
        position: relative;
        white-space: pre-wrap;
        color: inherit;
        color: var(--input-color, inherit);
        box-sizing: inherit;
    }

    .tagify__input:focus {
        outline: 0;
    }

    .tagify__input:focus::before {
        transition: .2s ease-out;
        opacity: 0;
        -webkit-transform: translatex(6px);
        transform: translatex(6px);
    }

    @supports (-ms-ime-align: auto) {
        .tagify__input:focus::before {
            display: none;
        }
    }

    .tagify__input:focus:empty::before {
        transition: .2s ease-out;
        opacity: 1;
        -webkit-transform: none;
        transform: none;
        color: rgba(0, 0, 0, 0.25);
        color: var(--placeholder-color-focus);
    }

    @-moz-document url-prefix() {
        .tagify__input:focus:empty::after {
            display: none;
        }
    }

    .tagify__input::before {
        content: attr(data-placeholder);
        height: 1em;
        line-height: 1em;
        margin: auto 0;
        z-index: 1;
        color: rgba(0, 0, 0, 0.4);
        color: var(--placeholder-color);
        white-space: nowrap;
        pointer-events: none;
        opacity: 0;
        position: absolute;
    }

    .tagify__input::after {
        content: attr(data-suggest);
        display: inline-block;
        white-space: pre;
        color: #000;
        opacity: .3;
        pointer-events: none;
        max-width: 100px;
    }

    .tagify__input .tagify__tag {
        margin: 0 1px;
    }

    .tagify__input .tagify__tag>div {
        padding-top: 0;
        padding-bottom: 0;
    }

    .tagify--mix {
        display: block;
    }

    .tagify--mix .tagify__input {
        padding: 5px;
        margin: 0;
        width: 100%;
        height: 100%;
        line-height: 1.5;
        display: block;
    }

    .tagify--mix .tagify__input::before {
        height: auto;
        display: none;
        line-height: inherit;
    }

    .tagify--mix .tagify__input::after {
        content: none;
    }

    .tagify--select::after {
        content: ">";
        opacity: .5;
        position: absolute;
        top: 50%;
        right: 0;
        bottom: 0;
        font: 16px monospace;
        line-height: 8px;
        height: 8px;
        pointer-events: none;
        -webkit-transform: translate(-150%, -50%) scaleX(1.2) rotate(90deg);
        transform: translate(-150%, -50%) scaleX(1.2) rotate(90deg);
        transition: .2s ease-in-out;
    }

    .tagify--select[aria-expanded=true]::after {
        -webkit-transform: translate(-150%, -50%) rotate(270deg) scaleY(1.2);
        transform: translate(-150%, -50%) rotate(270deg) scaleY(1.2);
    }

    .tagify--select .tagify__tag {
        position: absolute;
        top: 0;
        right: 1.8em;
        bottom: 0;
    }

    .tagify--select .tagify__tag div {
        display: none;
    }

    .tagify--select .tagify__input {
        width: 100%;
    }

    .tagify--empty .tagify__input::before {
        transition: .2s ease-out;
        opacity: 1;
        -webkit-transform: none;
        transform: none;
        display: inline-block;
        width: auto;
    }

    .tagify--mix .tagify--empty .tagify__input::before {
        display: inline-block;
    }

    .tagify--invalid {
        --tags-border-color: #D39494;
    }

    .tagify__dropdown {
        position: absolute;
        z-index: 9999;
        -webkit-transform: translateY(1px);
        transform: translateY(1px);
        overflow: hidden;
    }

    .tagify__dropdown[placement=top] {
        margin-top: 0;
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }

    .tagify__dropdown[placement=top] .tagify__dropdown__wrapper {
        border-top-width: 1.1px;
        border-bottom-width: 0;
    }

    .tagify__dropdown[position=text] {
        box-shadow: 0 0 0 3px rgba(var(--tagify-dd-color-primary), 0.1);
        font-size: .9em;
    }

    .tagify__dropdown[position=text] .tagify__dropdown__wrapper {
        border-width: 1px;
    }

    .tagify__dropdown__wrapper {
        max-height: 300px;
        overflow: auto;
        background: #fff;
        background: var(--tagify-dd-bg-color);
        border: 1px solid #3595f6;
        border-color: var(--tagify-dd-color-primary);
        border-bottom-width: 1.33px;
        border-top-width: 0;
        box-shadow: 0 2px 4px -2px rgba(0, 0, 0, 0.2);
        transition: 0.25s cubic-bezier(0, 1, 0.5, 1);
    }

    .tagify__dropdown--initial .tagify__dropdown__wrapper {
        max-height: 20px;
        -webkit-transform: translateY(-1em);
        transform: translateY(-1em);
    }

    .tagify__dropdown--initial[placement=top] .tagify__dropdown__wrapper {
        -webkit-transform: translateY(2em);
        transform: translateY(2em);
    }

    .tagify__dropdown__item {
        box-sizing: inherit;
        padding: .3em .5em;
        margin: 1px;
        cursor: pointer;
        border-radius: 2px;
        position: relative;
        outline: 0;
    }

    .tagify__dropdown__item--active {
        background: #3595f6;
        background: var(--tagify-dd-color-primary);
        color: #fff;
    }

    .tagify__dropdown__item:active,
    .tagify__dropdown__item.nice-select.open {
        -webkit-filter: brightness(105%);
        filter: brightness(105%);
    }

    .date-picker {
        width: 170px;
        height: 25px;
        padding: 0;
        border: 0;
        line-height: 25px;
        padding-left: 10px;
        font-size: 12px;
        font-family: Arial, sans-serif;
        font-weight: bold;
        cursor: pointer;
        color: #303030;
        position: relative;
        z-index: 2;
    }

    .date-picker-wrapper {
        position: absolute;
        z-index: 1;
        border: 1px solid #bfbfbf;
        background-color: #efefef;
        padding: 5px 12px;
        font-size: 12px;
        line-height: 20px;
        color: #aaa;
        font-family: Arial, sans-serif;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
        box-sizing: initial;
    }

    .dp-clearfix {
        clear: both;
        height: 0;
        font-size: 0;
    }

    .date-picker-wrapper.inline-wrapper {
        position: relative;
        box-shadow: none;
        display: inline-block;
    }

    .date-picker-wrapper.single-date {
        width: auto;
    }

    .date-picker-wrapper.no-shortcuts {
        padding-bottom: 12px;
    }

    .date-picker-wrapper.no-topbar {
        padding-top: 12px;
    }

    .date-picker-wrapper .footer {
        font-size: 11px;
        padding-top: 3px;
    }

    .date-picker-wrapper b {
        color: #666;
        font-weight: 700;
    }

    .date-picker-wrapper a {
        color: #6bb4d6;
        text-decoration: underline;
    }

    .date-picker-wrapper .month-name {
        text-transform: uppercase;
    }

    .date-picker-wrapper .select-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
        vertical-align: middle;
    }

    .date-picker-wrapper .select-wrapper:hover {
        text-decoration: underline;
    }

    .date-picker-wrapper .month-element {
        display: inline-block;
        vertical-align: middle;
    }

    .date-picker-wrapper .select-wrapper select {
        position: absolute;
        margin: 0;
        padding: 0;
        left: 0;
        top: -1px;
        font-size: inherit;
        font-style: inherit;
        font-weight: inherit;
        text-transform: inherit;
        color: inherit;
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: transparent;
        border: 0;
        outline: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
        filter: alpha(opacity=1);
        opacity: 0.01;
    }

    .date-picker-wrapper .month-wrapper {
        border: 1px solid #bfbfbf;
        border-radius: 3px;
        background-color: #fff;
        padding: 5px;
        cursor: default;
        position: relative;
        _overflow: hidden;
    }

    .date-picker-wrapper .month-wrapper table {
        width: 190px;
        float: left;
    }

    .date-picker-wrapper .month-wrapper table.month2 {
        width: 190px;
        float: left;
    }

    .date-picker-wrapper .month-wrapper table th,
    .date-picker-wrapper .month-wrapper table td {
        vertical-align: middle;
        text-align: center;
        line-height: 14px;
        margin: 0px;
        padding: 0px;
    }

    .date-picker-wrapper .month-wrapper table .day {
        padding: 5px 0;
        line-height: 1;
        font-size: 12px;
        margin-bottom: 1px;
        color: #ccc;
        cursor: default;
    }

    .date-picker-wrapper .month-wrapper table div.day.lastMonth,
    .date-picker-wrapper .month-wrapper table div.day.nextMonth {
        color: #999;
        cursor: default;
    }

    .date-picker-wrapper .month-wrapper table .day.checked {
        background-color: #9cdbf7;
    }

    .date-picker-wrapper .month-wrapper table .week-name {
        height: 20px;
        line-height: 20px;
        font-weight: 100;
        text-transform: uppercase;
    }

    .date-picker-wrapper .month-wrapper table .day.has-tooltip {
        cursor: help !important;
    }

    .date-picker-wrapper .month-wrapper table .day.has-tooltip .tooltip {
        white-space: nowrap;
    }

    .date-picker-wrapper .time label {
        white-space: nowrap;
    }

    .date-picker-wrapper .month-wrapper table .day.toMonth.valid {
        color: #333;
        cursor: pointer;
    }

    .date-picker-wrapper .month-wrapper table .day.toMonth.hovering {
        background-color: #cdecfa;
    }

    .date-picker-wrapper .month-wrapper table .day.nextMonth,
    .date-picker-wrapper .month-wrapper table .day.lastMonth {
        display: none;
    }

    .date-picker-wrapper .month-wrapper table .day.real-today {
        background-color: #ffe684;
    }

    .date-picker-wrapper .month-wrapper table .day.real-today.checked,
    .date-picker-wrapper .month-wrapper table .day.real-today.hovering {
        background-color: #70ccd5;
    }

    .date-picker-wrapper table .caption {
        height: 40px;
    }

    .date-picker-wrapper table .caption>th:first-of-type,
    .date-picker-wrapper table .caption>th:last-of-type {
        width: 27px;
    }

    .date-picker-wrapper table .caption .next,
    .date-picker-wrapper table .caption .prev {
        padding: 0 5px;
        cursor: pointer;
    }

    .date-picker-wrapper table .caption .next:hover,
    .date-picker-wrapper table .caption .prev:hover {
        background-color: #ccc;
        color: white;
    }

    .date-picker-wrapper .gap {
        position: relative;
        z-index: 1;
        width: 15px;
        height: 100%;
        background-color: red;
        font-size: 0;
        line-height: 0;
        float: left;
        top: -5px;
        margin: 0 10px -10px;
        visibility: hidden;
        height: 0;
    }

    .date-picker-wrapper .gap .gap-lines {
        height: 100%;
        overflow: hidden;
    }

    .date-picker-wrapper .gap .gap-line {
        height: 15px;
        width: 15px;
        position: relative;
    }

    .date-picker-wrapper .gap .gap-line .gap-1 {
        z-index: 1;
        height: 0;
        border-left: 8px solid white;
        border-top: 8px solid #eee;
        border-bottom: 8px solid #eee;
    }

    .date-picker-wrapper .gap .gap-line .gap-2 {
        position: absolute;
        right: 0;
        top: 0px;
        z-index: 2;
        height: 0;
        border-left: 8px solid transparent;
        border-top: 8px solid white;
    }

    .date-picker-wrapper .gap .gap-line .gap-3 {
        position: absolute;
        right: 0;
        top: 8px;
        z-index: 2;
        height: 0;
        border-left: 8px solid transparent;
        border-bottom: 8px solid white;
    }

    .date-picker-wrapper .gap .gap-top-mask {
        width: 6px;
        height: 1px;
        position: absolute;
        top: -1px;
        left: 1px;
        background-color: #eee;
        z-index: 3;
    }

    .date-picker-wrapper .gap .gap-bottom-mask {
        width: 6px;
        height: 1px;
        position: absolute;
        bottom: -1px;
        left: 7px;
        background-color: #eee;
        z-index: 3;
    }

    .date-picker-wrapper .selected-days {
        display: none;
    }

    .date-picker-wrapper .drp_top-bar {
        line-height: 1.4;
        position: relative;
        padding: 10px 40px 10px 0;
    }

    .date-picker-wrapper .drp_top-bar .error-top,
    .date-picker-wrapper .drp_top-bar .normal-top {
        display: none;
    }

    .date-picker-wrapper .drp_top-bar .default-top {
        display: block;
    }

    .date-picker-wrapper .drp_top-bar.error .default-top {
        display: none;
    }

    .date-picker-wrapper .drp_top-bar.error .error-top {
        display: block;
        color: red;
    }

    .date-picker-wrapper .drp_top-bar.normal .default-top {
        display: none;
    }

    .date-picker-wrapper .drp_top-bar.normal .normal-top {
        display: block;
    }

    .date-picker-wrapper .drp_top-bar.normal .normal-top .selection-top {
        color: #333;
    }

    .date-picker-wrapper .drp_top-bar .apply-btn {
        position: absolute;
        right: 0px;
        top: 6px;
        padding: 3px 5px;
        margin: 0;
        font-size: 12px;
        border-radius: 4px;
        cursor: pointer;
        color: #d9eef7;
        border: solid 1px #0076a3;
        background: #0095cd;
        background: -moz-linear-gradient(top, #00adee, #0078a5);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
        color: white;
        line-height: initial;
    }

    .date-picker-wrapper .drp_top-bar .apply-btn.disabled {
        cursor: pointer;
        color: #606060;
        border: solid 1px #b7b7b7;
        background: #fff;
        background: -moz-linear-gradient(top, #fff, #ededed);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');
    }

    .date-picker-wrapper .time {
        position: relative;
    }

    .date-picker-wrapper.single-month .time {
        display: block;
    }

    .date-picker-wrapper .time input[type=range] {
        vertical-align: middle;
        width: 129px;
        padding: 0;
        margin: 0;
        height: 20px;
    }

    .date-picker-wrapper .time1 {
        width: 180px;
        padding: 0 5px;
        text-align: center;
    }

    /*time styling*/
    .time2 {
        width: 180px;
        padding: 0 5px;
        text-align: center;
    }

    .date-picker-wrapper .time1 {
        float: left;
    }

    .date-picker-wrapper .time2 {
        float: right;
    }

    .date-picker-wrapper .hour {
        text-align: right;
    }

    .minute {
        text-align: right;
    }

    .date-picker-wrapper .hide {
        display: none;
    }

    .date-picker-wrapper .first-date-selected,
    .date-picker-wrapper .last-date-selected {
        background-color: #49e !important;
        color: white !important;
    }

    .date-picker-wrapper .date-range-length-tip {
        position: absolute;
        margin-top: -4px;
        margin-left: -8px;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
        display: none;
        background-color: yellow;
        padding: 0 6px;
        border-radius: 2px;
        font-size: 12px;
        line-height: 16px;
        -webkit-filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.3));
        -moz-filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.3));
        -ms-filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.3));
        -o-filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.3));
        filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.3));
    }

    .date-picker-wrapper .date-range-length-tip:after {
        content: '';
        position: absolute;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 4px solid yellow;
        left: 50%;
        margin-left: -4px;
        bottom: -4px;
    }

    .date-picker-wrapper.two-months.no-gap .month1 .next,
    .date-picker-wrapper.two-months.no-gap .month2 .prev {
        display: none;
    }

    .date-picker-wrapper .week-number {
        padding: 5px 0;
        line-height: 1;
        font-size: 12px;
        margin-bottom: 1px;
        color: #999;
        cursor: pointer;
    }

    .date-picker-wrapper .week-number.week-number-selected {
        color: #49e;
        font-weight: bold;
    }

    /*! nouislider - 11.0.3 - 2018-01-21 14:04:07 */
    .noUi-target,
    .noUi-target * {
        -webkit-touch-callout: none;
        -webkit-tap-highlight-color: transparent;
        -webkit-user-select: none;
        touch-action: none;
        -ms-user-select: none;
        -moz-user-select: none;
        user-select: none;
        box-sizing: border-box;
    }

    .noUi-target {
        position: relative;
        direction: ltr;
    }

    .noUi-base,
    .noUi-connects {
        width: 100%;
        height: 100%;
        position: relative;
        z-index: 1;
    }

    .noUi-connects {
        overflow: hidden;
        z-index: 0;
    }

    .noUi-connect,
    .noUi-origin {
        will-change: transform;
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
    }

    html:not([dir=rtl]) .noUi-horizontal .noUi-origin {
        left: auto;
        right: 0;
    }

    .noUi-vertical .noUi-origin {
        width: 0;
    }

    .noUi-horizontal .noUi-origin {
        height: 0;
    }

    .noUi-handle {
        position: absolute;
    }

    .noUi-state-tap .noUi-connect,
    .noUi-state-tap .noUi-origin {
        transition: -webkit-transform .3s;
        transition: transform .3s;
        transition: transform .3s, -webkit-transform .3s;
    }

    .noUi-state-drag * {
        cursor: inherit !important;
    }

    .noUi-horizontal {
        height: 18px;
    }

    .noUi-horizontal .noUi-handle {
        width: 34px;
        height: 28px;
        left: -17px;
        top: -6px;
    }

    .noUi-vertical {
        width: 18px;
    }

    .noUi-vertical .noUi-handle {
        width: 28px;
        height: 34px;
        left: -6px;
        top: -17px;
    }

    html:not([dir=rtl]) .noUi-horizontal .noUi-handle {
        right: -17px;
        left: auto;
    }

    .noUi-target {
        background: #FAFAFA;
        border-radius: 4px;
        border: 1px solid #D3D3D3;
        box-shadow: inset 0 1px 1px #F0F0F0, 0 3px 6px -5px #BBB;
    }

    .noUi-connects {
        border-radius: 3px;
    }

    .noUi-connect {
        background: #3FB8AF;
    }

    .noUi-draggable {
        cursor: ew-resize;
    }

    .noUi-vertical .noUi-draggable {
        cursor: ns-resize;
    }

    .noUi-handle {
        border: 1px solid #D9D9D9;
        border-radius: 3px;
        background: #FFF;
        cursor: default;
        box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #EBEBEB, 0 3px 6px -3px #BBB;
    }

    .noUi-active {
        box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #DDD, 0 3px 6px -3px #BBB;
    }

    .noUi-handle:after,
    .noUi-handle:before {
        content: "";
        display: block;
        position: absolute;
        height: 14px;
        width: 1px;
        background: #E8E7E6;
        left: 14px;
        top: 6px;
    }

    .noUi-handle:after {
        left: 17px;
    }

    .noUi-vertical .noUi-handle:after,
    .noUi-vertical .noUi-handle:before {
        width: 14px;
        height: 1px;
        left: 6px;
        top: 14px;
    }

    .noUi-vertical .noUi-handle:after {
        top: 17px;
    }

    [disabled] .noUi-connect {
        background: #B8B8B8;
    }

    [disabled] .noUi-handle,
    [disabled].noUi-handle,
    [disabled].noUi-target {
        cursor: not-allowed;
    }

    .noUi-pips,
    .noUi-pips * {
        box-sizing: border-box;
    }

    .noUi-pips {
        position: absolute;
        color: #999;
    }

    .noUi-value {
        position: absolute;
        white-space: nowrap;
        text-align: center;
    }

    .noUi-value-sub {
        color: #ccc;
        font-size: 10px;
    }

    .noUi-marker {
        position: absolute;
        background: #CCC;
    }

    .noUi-marker-large,
    .noUi-marker-sub {
        background: #AAA;
    }

    .noUi-pips-horizontal {
        padding: 10px 0;
        height: 80px;
        top: 100%;
        left: 0;
        width: 100%;
    }

    .noUi-value-horizontal {
        -webkit-transform: translate(-50%, 50%);
        transform: translate(-50%, 50%);
    }

    .noUi-rtl .noUi-value-horizontal {
        -webkit-transform: translate(50%, 50%);
        transform: translate(50%, 50%);
    }

    .noUi-marker-horizontal.noUi-marker {
        margin-left: -1px;
        width: 2px;
        height: 5px;
    }

    .noUi-marker-horizontal.noUi-marker-sub {
        height: 10px;
    }

    .noUi-marker-horizontal.noUi-marker-large {
        height: 15px;
    }

    .noUi-pips-vertical {
        padding: 0 10px;
        height: 100%;
        top: 0;
        left: 100%;
    }

    .noUi-value-vertical {
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%, 0);
        padding-left: 25px;
    }

    .noUi-rtl .noUi-value-vertical {
        -webkit-transform: translate(0, 50%);
        transform: translate(0, 50%);
    }

    .noUi-marker-vertical.noUi-marker {
        width: 5px;
        height: 2px;
        margin-top: -1px;
    }

    .noUi-marker-vertical.noUi-marker-sub {
        width: 10px;
    }

    .noUi-marker-vertical.noUi-marker-large {
        width: 15px;
    }

    .noUi-tooltip {
        display: block;
        position: absolute;
        border: 1px solid #D9D9D9;
        border-radius: 3px;
        background: #fff;
        color: #000;
        padding: 5px;
        text-align: center;
        white-space: nowrap;
    }

    .noUi-horizontal .noUi-tooltip {
        -webkit-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
        left: 50%;
        bottom: 120%;
    }

    .noUi-vertical .noUi-tooltip {
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
        top: 50%;
        right: 120%;
    }

    body {
        min-width: 375px;
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        letter-spacing: -.01em;
        color: #1A1D1F;
    }

    body.dark {
        background: #111315;
        color: #FCFCFC;
    }

    body.no-scroll,
    html.no-scroll {
        height: calc(var(--vh, 1vh) * 100);
        overflow: hidden;
    }

    a {
        text-decoration: none;
    }

    button {
        background: none;
    }

    button,
    input,
    textarea {
        font-family: 'Inter', sans-serif;
    }

    svg,
    img {
        vertical-align: middle;
    }

    .icon {
        width: 16px;
        height: 16px;
        fill: #1A1D1F;
    }

    body.dark .some-icon {
        display: none;
    }

    .some-icon-dark {
        display: none;
    }

    body.dark .some-icon-dark {
        display: inline-block;
    }

    .select {
        float: none;
        width: auto;
        height: 48px;
        padding: 0 48px 0 16px;
        background: none;
        box-shadow: inset 0 0 0 2px #EFEFEF;
        border-radius: 12px;
        border: none;
        opacity: 1;
        font-size: 14px;
        font-weight: 600;
        line-height: 48px;
        color: #1A1D1F;
    }

    .select:after {
        display: none;
    }

    .select:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 48px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12.707 15.707l-.094.083a1 1 0 0 1-1.32-.083h0l-6-6-.083-.094a1 1 0 0 1 1.497-1.32h0L12 13.585l5.293-5.292.094-.083a1 1 0 0 1 1.32 1.497h0l-6 6z' fill='%236f767e'/%3E%3C/svg%3E") no-repeat 50% 50%/24px auto;
        transition: -webkit-transform .2s;
        transition: transform .2s;
        transition: transform .2s, -webkit-transform .2s;
    }

    body.dark .select {
        background: none;
        box-shadow: inset 0 0 0 2px #272B30;
        -webkit-appearance: none;
        color: #6F767E;
    }

    .select:hover {
        box-shadow: inset 0 0 0 2px #9A9FA5;
    }

    body.dark .select:hover {
        box-shadow: inset 0 0 0 2px #33383F;
    }

    .select.open {
        box-shadow: inset 0 0 0 2px #9A9FA5;
        background: #FFFFFF;
    }

    body.dark .select.open {
        box-shadow: inset 0 0 0 2px #33383F;
        background: #111315;
        color: #FCFCFC;
    }

    .select.open:before {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .select .current {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .select .list {
        right: 0;
        margin-top: 2px;
        padding: 8px 0;
        border-radius: 12px;
        background: #FFFFFF;
        border: none;
        box-shadow: inset 0 0 0 2px #EFEFEF, 0 4px 12px rgba(244, 244, 244, 0.1);
    }

    body.dark .select .list {
        background: #111315;
        box-shadow: inset 0 0 0 2px #33383F, 0 4px 12px rgba(17, 19, 21, 0.1);
    }

    .select .option {
        min-height: auto;
        padding: 8px 16px;
        background: none;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #6F767E;
    }

    .select .option:hover,
    .select .option.focus,
    .select .option.selected.focus {
        background: none;
    }

    .select .option:hover,
    .select .option.focus {
        font-weight: 600;
        color: #1A1D1F;
    }

    body.dark .select .option:hover,
    body.dark .select .option.focus {
        color: #FCFCFC;
    }

    .select .option.selected {
        font-weight: 600;
        color: #2A85FF;
    }

    body.dark .select .option.selected {
        color: #2A85FF;
    }

    .select_small {
        height: 40px;
        padding: 0 40px 0 16px;
        line-height: 40px;
    }

    .select_small:before {
        width: 40px;
        background-size: 16px auto;
    }

    .select_small .option {
        padding: 4px 16px;
    }

    .select_up .list {
        top: auto;
        bottom: 100%;
        margin: 0 0 2px;
    }

    .tooltip {
        display: none;
        margin-left: 4px;
        cursor: pointer;
    }

    .tooltipster-base .tooltipster-box {
        margin: 0 !important;
        background: #272B30;
        border: none;
        border-radius: 4px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1), inset 0px 0px 1px #000000;
    }

    .tooltipster-base .tooltipster-content {
        padding: 3px 12px;
        font-size: 12px;
        font-weight: 600;
        line-height: 1.6;
        color: #F4F4F4;
    }

    .tooltipster-base .tooltipster-arrow {
        display: none;
    }

    .apexcharts-canvas .apexcharts-text {
        font-size: 12px;
        font-weight: 500;
        letter-spacing: -.01em;
        fill: #9A9FA5;
    }

    .apexcharts-canvas .apexcharts-gridline {
        stroke: #EFEFEF;
    }

    body.dark .apexcharts-canvas .apexcharts-gridline {
        stroke: #272B30 !important;
    }

    .apexcharts-canvas .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-canvas .apexcharts-ycrosshairs.apexcharts-active {
        stroke: rgba(111, 118, 126, 0.5);
    }

    body.dark .apexcharts-canvas .apexcharts-xcrosshairs.apexcharts-active,
    body.dark .apexcharts-canvas .apexcharts-ycrosshairs.apexcharts-active {
        stroke: #6F767E;
    }

    .apexcharts-canvas .apexcharts-marker {
        stroke-width: 0;
    }

    .apexcharts-canvas .apexcharts-tooltip {
        padding: 8px;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1), 0px 2px 4px rgba(0, 0, 0, 0.1), inset 0px 0px 1px #000000;
    }

    .apexcharts-canvas .apexcharts-tooltip-title {
        margin-bottom: 8px;
        padding: 0;
    }

    .apexcharts-canvas .apexcharts-tooltip-series-group {
        background: none !important;
        padding: 0 !important;
    }

    .apexcharts-canvas .apexcharts-tooltip-y-group {
        padding: 0;
    }

    .apexcharts-canvas .apexcharts-tooltip-marker {
        margin-right: 4px;
        border-radius: 4px;
    }

    .apexcharts-canvas .apexcharts-tooltip-text {
        font-weight: 600;
        color: #FCFCFC;
    }

    .apexcharts-canvas .apexcharts-tooltip.apexcharts-theme-light {
        border-color: rgba(255, 255, 255, 0.12);
        background: #272B30;
    }

    .apexcharts-canvas .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: none;
        border: none;
        color: #EFEFEF;
    }

    .apexcharts-canvas .apexcharts-legend.position-bottom.apexcharts-align-center,
    .apexcharts-canvas .apexcharts-legend.position-top.apexcharts-align-center {
        justify-content: space-between;
    }

    @media only screen and (max-width: 767px) {

        .apexcharts-canvas .apexcharts-legend.position-bottom.apexcharts-align-center,
        .apexcharts-canvas .apexcharts-legend.position-top.apexcharts-align-center {
            justify-content: center;
        }
    }

    .apexcharts-canvas .apexcharts-legend-marker {
        border-radius: 4px !important;
    }

    .apexcharts-canvas .apexcharts-legend-series {
        margin-top: 6px !important;
    }

    .apexcharts-canvas .apexcharts-legend-text {
        font-weight: 600 !important;
        color: #1A1D1F !important;
    }

    body.dark .apexcharts-canvas .apexcharts-legend-text {
        color: #EFEFEF !important;
    }

    body.dark .apexcharts-canvas .apexcharts-pie-area {
        stroke: #1A1D1F;
    }

    .slick-arrow {
        position: absolute;
        z-index: 2;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 0;
        transition: all .2s;
    }

    .slick-arrow svg {
        position: relative;
        z-index: 2;
    }

    .slick-arrow path {
        fill: #6F767E;
        transition: fill .2s;
    }

    .slick-arrow:hover {
        box-shadow: inset 0 0 0 2px #272B30;
    }

    body.dark .slick-arrow:hover {
        box-shadow: inset 0 0 0 2px #EFEFEF;
    }

    body.dark .slick-arrow:hover path {
        fill: #272B30;
    }

    .fancybox-caption__body {
        color: #6F767E;
    }

    .fancybox-image {
        border-radius: 16px;
    }

    .fancybox-infobar {
        font-size: 14px;
        font-weight: 700;
        color: #6F767E;
    }

    .fancybox-bg {
        background: #1A1D1F;
    }

    .fancybox-is-open .fancybox-bg {
        opacity: 1;
    }

    .tagify {
        padding: 3px;
        background: #F4F4F4;
        border: none;
        border-radius: 6px;
    }

    body.dark .tagify {
        background: #272B30;
    }

    .tagify__tag>div::before {
        border-radius: 6px;
    }

    .tagify__input::before {
        line-height: 1.4em;
    }

    body.dark .tagify__input::before {
        color: #FCFCFC;
    }

    .tagify__input::after {
        color: #9A9FA5;
    }

    .tagify__input:focus:empty:before {
        color: #9A9FA5;
    }

    .noUi-horizontal {
        height: 4px;
    }

    .noUi-target {
        border: none;
        background: #EFEFEF;
        box-shadow: none;
    }

    body.dark .noUi-target {
        background: #272B30;
    }

    .noUi-connect {
        background: #2A85FF;
    }

    .noUi-handle {
        border: none;
        box-shadow: none;
        background: #FCFCFC;
        border-radius: 50%;
        cursor: pointer;
    }

    .noUi-handle:before,
    .noUi-handle:after {
        display: none;
    }

    .noUi-horizontal .noUi-handle {
        right: -12px;
        top: -6px;
        width: 16px;
        height: 16px;
        border: 2px solid #2A85FF;
        background: #FCFCFC;
        box-shadow: 0px 1px 2px #2881FF, inset 0px 2px 2px #FFFFFF;
    }

    .noUi-tooltip {
        display: flex;
        justify-content: center;
        align-items: center;
        min-width: 40px;
        padding: 3px 10px;
        background: #272B30;
        border-radius: 8px;
        border: 1px solid rgba(252, 252, 252, 0.12);
        font-size: 12px;
        font-weight: 600;
        color: #FCFCFC;
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    .noUi-tooltip:before {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        width: 0px;
        height: 0px;
        border-style: solid;
        border-width: 4px 4px 0 4px;
        border-color: #272B30 transparent transparent transparent;
    }

    body.dark .noUi-tooltip {
        background: #111315;
    }

    body.dark .noUi-tooltip:before {
        width: 0px;
        height: 0px;
        border-style: solid;
        border-width: 4px 4px 0 4px;
        border-color: #111315 transparent transparent transparent;
    }

    .noUi-handle:hover .noUi-tooltip {
        visibility: visible;
        opacity: 1;
    }

    .noUi-horizontal .noUi-tooltip {
        bottom: 24px;
    }

    .range_time .noUi-horizontal {
        height: 2px;
    }

    .range_time .noUi-handle {
        top: -11px;
    }

    html:not([dir=rtl]) .noUi-horizontal .noUi-handle {
        right: -12px;
    }

    .text-right {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    .text-uppercase {
        text-transform: uppercase;
    }

    .m-auto {
        margin: auto;
    }

    .ml-auto {
        margin-left: auto;
    }

    .mr-auto {
        margin-right: auto;
    }

    .align-baseline {
        align-items: baseline;
    }

    @media only screen and (max-width: 1259px) {
        .desktop-hide {
            display: none !important;
        }
    }

    .desktop-show {
        display: none !important;
    }

    @media only screen and (max-width: 1259px) {
        .desktop-show {
            display: block !important;
        }
    }

    @media only screen and (max-width: 1259px) {
        .desktop-text-right {
            text-align: right !important;
        }
    }

    @media only screen and (max-width: 1023px) {
        .tablet-hide {
            display: none !important;
        }
    }

    .tablet-show {
        display: none !important;
    }

    @media only screen and (max-width: 1023px) {
        .tablet-show {
            display: block !important;
        }
    }

    @media only screen and (max-width: 1023px) {
        .tablet-text-right {
            text-align: right !important;
        }
    }

    @media only screen and (max-width: 767px) {
        .mobile-hide {
            display: none !important;
        }
    }

    .mobile-show {
        display: none !important;
    }

    @media only screen and (max-width: 767px) {
        .mobile-show {
            display: block !important;
        }
    }

    @media only screen and (max-width: 767px) {
        .mobile-text-right {
            text-align: right !important;
        }
    }

    .container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 80px;
    }

    .h1,
    .h2,
    .h3,
    .h4 {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
    }

    .h1 {
        font-size: 64px;
        line-height: 1;
        letter-spacing: -.03em;
    }

    .h2 {
        font-size: 48px;
        line-height: 1;
        letter-spacing: -.03em;
    }

    .h3 {
        font-size: 40px;
        line-height: 1.2;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .h3 {
            font-size: 32px;
            line-height: 1.25;
            letter-spacing: -.03em;
        }
    }

    .h4 {
        font-size: 32px;
        line-height: 1.25;
        letter-spacing: -.03em;
    }

    [class^="button"] {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        height: 48px;
        padding: 0 20px;
        background: #2A85FF;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 700;
        line-height: 1.6;
        text-align: center;
        color: #FCFCFC;
        transition: all .2s;
    }

    [class^="button"]:hover {
        background: #0069f6;
    }

    [class^="button"].disabled {
        opacity: .5;
        pointer-events: none;
    }

    [class^="button"] svg {
        fill: #FCFCFC;
        transition: all .2s;
    }

    [class^="button"]:not([class^="button-square"]) svg:first-child {
        margin-right: 8px;
    }

    [class^="button"]:not([class^="button-square"]) svg:last-child {
        margin-left: 8px;
    }

    .button-stroke,
    .button-stroke-red {
        background: none;
        box-shadow: 0 0 0 2px #EFEFEF inset;
    }

    body.dark .button-stroke,
    body.dark .button-stroke-red {
        box-shadow: 0 0 0 2px #272B30 inset;
    }

    .button-stroke {
        color: #1A1D1F;
    }

    .button-stroke svg {
        fill: #6F767E;
    }

    body.dark .button-stroke {
        color: #FCFCFC;
    }

    .button-stroke:hover {
        background: none;
        box-shadow: 0 0 0 2px #1A1D1F inset;
    }

    .button-stroke:hover svg {
        fill: #1A1D1F;
    }

    body.dark .button-stroke:hover {
        box-shadow: 0 0 0 2px #EFEFEF inset;
    }

    body.dark .button-stroke:hover svg {
        fill: #FCFCFC;
    }

    .button-stroke.active {
        background: #272B30;
        box-shadow: 0 0 0 2px #272B30 inset;
    }

    .button-stroke.active svg {
        fill: #1A1D1F;
    }

    .button-stroke-red {
        color: #FF6A55;
    }

    .button-stroke-red svg {
        fill: #FF6A55;
    }

    .button-stroke-red:hover,
    .button-stroke-red.active {
        background: #FF6A55;
        box-shadow: 0 0 0 2px #FF6A55 inset;
        color: #FCFCFC;
    }

    .button-stroke-red:hover svg,
    .button-stroke-red.active svg {
        fill: #FCFCFC;
    }

    .button-white {
        box-shadow: 0 0 0 2px #EFEFEF inset;
        background: #FCFCFC;
        color: #1A1D1F;
    }

    .button-white svg {
        fill: #1A1D1F;
    }

    .button-white:hover,
    .button-white.active {
        box-shadow: 0 0 0 2px #1A1D1F inset;
        background: #FFFFFF;
        color: #1A1D1F;
    }

    .button-white:hover svg,
    .button-white.active svg {
        fill: #1A1D1F;
    }

    .button-small {
        height: 40px;
        padding: 0 16px;
        border-radius: 8px;
        font-size: 13px;
    }

    .button-square-stroke {
        flex: 0 0 48px;
        width: 48px;
        height: 48px;
        padding: 0;
        background: none;
        box-shadow: 0 0 0 2px #EFEFEF inset;
        transition: all .2s;
    }

    .button-square-stroke svg {
        fill: #6F767E;
    }

    body.dark .button-square-stroke {
        box-shadow: 0 0 0 2px #272B30 inset;
    }

    .button-square-stroke:hover {
        background: #2A85FF;
        box-shadow: 0 0 0 2px #2A85FF inset;
    }

    .button-square-stroke:hover svg {
        fill: #FCFCFC;
    }

    .button-square-stroke.button-small {
        flex: 0 0 40px;
        width: 40px;
        height: 40px;
    }

    [class^="status"] {
        display: inline-block;
        padding: 0 8px;
        border-radius: 6px;
        font-size: 12px;
        line-height: 24px;
        font-weight: 700;
    }

    .status-green {
        background: #EAFAE5;
        color: #83BF6E;
    }

    body.dark .status-green {
        background: rgba(131, 191, 110, 0.15);
    }

    .status-green-dark {
        background: #B5E4CA;
        color: #1A1D1F;
    }

    .status-red {
        background: #FFE7E4;
        color: #FF6A55;
    }

    body.dark .status-red {
        background: rgba(255, 106, 85, 0.15);
    }

    .status-red-dark {
        background: #FFBC99;
        color: #FCFCFC;
    }

    .status-purple {
        background: #CABDFF;
        color: #8E59FF;
    }

    .status-blue {
        background: #B1E5FC;
        color: #2A85FF;
    }

    .status-yellow {
        background: #FFD88D;
        color: #1A1D1F;
    }

    [class^="title"] {
        position: relative;
        display: inline-block;
        padding-left: 32px;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        [class^="title"] {
            font-size: 18px;
        }
    }

    [class^="title"]:before {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 16px;
        height: 32px;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        border-radius: 4px;
    }

    .title-red:before {
        background: #FFBC99;
    }

    .title-custom:before {
        background: #B5E4CA;
    }

    .title-blue:before {
        background: #B1E5FC;
    }

    .title-purple:before {
        background: #CABDFF;
    }

    .title-yellow:before {
        background: #FFD88D;
    }

    .title-green:before {
        background: #B5E4CA;
    }

    .balance.negative,
    .balance.positive {
        display: inline-flex;
        align-items: center;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
    }

    .balance.negative svg,
    .balance.positive svg {
        margin-right: 4px;
    }

    .balance.negative {
        color: #FF6A55;
    }

    .balance.negative svg {
        fill: #FF6A55;
    }

    .balance.positive {
        color: #83BF6E;
    }

    .balance.positive svg {
        fill: #83BF6E;
    }

    .balance.background.positive,
    .balance.background.negative {
        height: 24px;
        padding: 0 4px;
        border-radius: 8px;
    }

    .balance.background.positive {
        background: #EAFAE5;
    }

    body.dark .balance.background.positive {
        background: rgba(234, 250, 229, 0.25);
    }

    .balance.background.negative {
        background: #FFE7E4;
    }

    body.dark .balance.background.negative {
        background: rgba(255, 216, 211, 0.15);
    }

    .favorite {
        position: relative;
        width: 20px;
        height: 20px;
    }

    .favorite .icon {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 20px;
        height: 20px;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        fill: #9A9FA5;
        transition: all .2s;
    }

    .favorite .icon:nth-child(2) {
        z-index: 2;
        opacity: 0;
    }

    .favorite:hover .icon {
        fill: #2A85FF;
    }

    .favorite.active .icon {
        fill: #2A85FF;
    }

    .favorite.active .icon:first-child {
        opacity: 0;
    }

    .favorite.active .icon:nth-child(2) {
        opacity: 1;
    }

    .page {
        padding: 96px 0 0 340px;
    }

    @media only screen and (max-width: 1339px) {
        .page {
            padding: 80px 0 0 300px;
        }
    }

    @media only screen and (max-width: 1259px) {
        .page {
            padding-left: 96px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .page {
            overflow: hidden;
        }
    }

    @media only screen and (max-width: 767px) {
        .page {
            padding-left: 0;
        }
    }

    .page__inner {
        display: flex;
        flex-direction: column;
        min-height: calc(100vh - 96px);
        padding: 40px;
    }

    @media only screen and (max-width: 1339px) {
        .page__inner {
            padding: 32px 24px;
        }
    }

    @media only screen and (max-width: 767px) {
        .page__inner {
            padding: 24px 16px;
        }
    }

    .page__container {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        width: 1250px;
        margin: -69px -316px;
    }

    .page__container.wide {
        max-width: 100%;
    }

    .page__title {
        margin-bottom: 24px;
        position: absolute;
        top: 55px;
    }

    @media only screen and (max-width: 767px) {
        .page__title {
            margin-bottom: 16px;
        }
    }

    .page__row {
        display: flex;
    }

    @media only screen and (max-width: 1023px) {
        .page__row {
            display: block;
        }
    }

    .page__row:not(:last-child) {
        margin-bottom: 8px;
    }

    .page__col:first-child {
        flex: 0 0 calc(100% - 340px);
        width: calc(100% - 340px);
        padding-right: 8px;
    }

    @media only screen and (max-width: 1339px) {
        .page__col:first-child {
            flex: 0 0 calc(100% - 324px);
            width: calc(100% - 324px);
        }
    }

    @media only screen and (max-width: 1259px) {
        .page__col:first-child {
            flex: 0 0 calc(100% - 312px);
            width: calc(100% - 312px);
        }
    }

    @media only screen and (max-width: 1023px) {
        .page__col:first-child {
            width: 100%;
            margin-bottom: 8px;
            padding-right: 0;
        }
    }

    .page__col:nth-child(2) {
        flex-shrink: 0;
        width: 340px;
    }

    @media only screen and (max-width: 1339px) {
        .page__col:nth-child(2) {
            width: 324px;
        }
    }

    @media only screen and (max-width: 1259px) {
        .page__col:nth-child(2) {
            width: 312px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .page__col:nth-child(2) {
            width: 100%;
        }
    }

    .page_simple {
        padding: 0;
    }

    @media only screen and (max-width: 1339px) {
        .page_simple {
            padding: 0;
        }
    }

    @media only screen and (max-width: 1259px) {
        .page_simple {
            padding-left: 0;
        }
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        display: none;
        flex-direction: column;
        width: 340px;
        padding: 24px;
        background: #FCFCFC;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .sidebar::-webkit-scrollbar {
        display: none;
    }

    @media only screen and (max-width: 1339px) {
        .sidebar {
            width: 300px;
            padding: 16px;
        }
    }

    @media only screen and (max-width: 1259px) {
        .sidebar {
            z-index: 30;
            width: 96px;
            align-items: center;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar {
            width: 100%;
            align-items: stretch;
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            transition: -webkit-transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s;
        }
    }

    body.dark .sidebar {
        background: #1A1D1F;
    }

    .sidebar.visible {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }

    @media only screen and (max-width: 1259px) {
        .sidebar.active {
            align-items: stretch;
            width: 300px;
            box-shadow: 4px 0 32px rgba(17, 19, 21, 0.05);
        }

        .sidebar.active .sidebar__item,
        .sidebar.active .sidebar__link,
        .sidebar.active .sidebar__help {
            width: 100%;
            font-size: 15px;
        }

        .sidebar.active .sidebar__item>.icon,
        .sidebar.active .sidebar__help>.icon {
            margin-right: 12px;
        }

        .sidebar.active .sidebar__counter {
            display: block;
        }

        .sidebar.active .sidebar__toggle {
            position: absolute;
            top: 16px;
            right: 16px;
        }

        .sidebar.active .sidebar__toggle .icon {
            fill: #1A1D1F;
        }

        .sidebar.active .sidebar__toggle .icon:first-child {
            display: none;
        }

        .sidebar.active .sidebar__toggle .icon:nth-child(2) {
            display: inline-block;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar.active {
            width: 100%;
        }
    }

    .sidebar__logo {
        display: block;
        width: 48px;
        margin-bottom: 48px;
    }

    @media only screen and (max-width: 1339px) {
        .sidebar__logo {
            margin-bottom: 24px;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar__logo {
            margin-left: auto;
        }
    }

    .sidebar__logo img {
        width: 100%;
    }

    .sidebar__menu {
        display: flex;
        flex-direction: column;
        margin-bottom: auto;
    }

    .sidebar__item:not(:last-child) {
        margin-bottom: 8px;
    }

    .sidebar__item[href],
    .sidebar__help,
    .sidebar__head,
    .sidebar__link {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        height: 48px;
        padding: 0 12px;
        border-radius: 12px;
        white-space: nowrap;
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        transition: background .2s, box-shadow .2s, color .2s;
    }

    .sidebar__item[href] .icon,
    .sidebar__help .icon,
    .sidebar__head .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    @media only screen and (min-width: 1024px) {

        .sidebar__item[href]:hover,
        .sidebar__help:hover,
        .sidebar__head:hover {
            color: #1A1D1F;
        }

        .sidebar__item[href]:hover .icon,
        .sidebar__help:hover .icon,
        .sidebar__head:hover .icon {
            fill: #1A1D1F;
        }

        body.dark .sidebar__item[href]:hover,
        body.dark .sidebar__help:hover,
        body.dark .sidebar__head:hover {
            color: #FCFCFC;
        }

        body.dark .sidebar__item[href]:hover .icon,
        body.dark .sidebar__help:hover .icon,
        body.dark .sidebar__head:hover .icon {
            fill: #FCFCFC;
        }
    }

    .sidebar__item[href].active,
    .sidebar__help.active {
        color: #1A1D1F;
    }

    .sidebar__item[href].active .icon,
    .sidebar__help.active .icon {
        fill: #1A1D1F;
    }

    body.dark .sidebar__item[href].active,
    body.dark .sidebar__help.active {
        color: #FCFCFC;
    }

    body.dark .sidebar__item[href].active .icon,
    body.dark .sidebar__help.active .icon {
        fill: #FCFCFC;
    }

    @media only screen and (max-width: 1259px) {

        .sidebar__item[href],
        .sidebar__help {
            width: 48px;
            font-size: 0;
        }
    }

    @media only screen and (max-width: 767px) {

        .sidebar__item[href],
        .sidebar__help {
            width: 100%;
            font-size: 15px;
        }
    }

    .sidebar__item[href] .icon,
    .sidebar__help .icon {
        margin-right: 12px;
    }

    @media only screen and (max-width: 1259px) {

        .sidebar__item[href] .icon,
        .sidebar__help .icon {
            margin-right: 0;
        }
    }

    @media only screen and (max-width: 767px) {

        .sidebar__item[href] .icon,
        .sidebar__help .icon {
            margin-right: 12px;
        }
    }

    .sidebar__item[href].active,
    .sidebar__help.active {
        background: #EFEFEF;
        box-shadow: inset 0px -2px 1px rgba(0, 0, 0, 0.05), inset 0px 1px 1px #FFFFFF;
    }

    body.dark .sidebar__item[href].active,
    body.dark .sidebar__help.active {
        background: #272B30;
        box-shadow: inset 0px -2px 1px rgba(0, 0, 0, 0.4), inset 0px 1px 1px rgba(255, 255, 255, 0.11);
    }

    .sidebar__item_dropdown.active .sidebar__body,
    .sidebar__item_dropdown.visible .sidebar__body {
        display: block;
    }

    @media only screen and (max-width: 1259px) {

        .sidebar__item_dropdown.active .sidebar__body,
        .sidebar__item_dropdown.visible .sidebar__body {
            display: none;
        }
    }

    @media only screen and (max-width: 767px) {

        .sidebar__item_dropdown.active .sidebar__body,
        .sidebar__item_dropdown.visible .sidebar__body {
            display: block;
        }
    }

    .sidebar__item_dropdown.active .sidebar__head>.icon:last-child,
    .sidebar__item_dropdown.visible:not(.wide) .sidebar__head>.icon:last-child {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__item_dropdown.wide .sidebar__head {
            font-size: 15px;
        }
    }

    @media only screen and (max-width: 1259px) and (max-width: 1259px) {
        .sidebar__item_dropdown.wide .sidebar__head>.icon:first-child {
            margin-right: 12px;
        }
    }

    @media only screen and (max-width: 1259px) and (max-width: 1259px) {
        .sidebar__item_dropdown.wide .sidebar__head>.icon:last-child {
            display: inline-block;
        }
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__item_dropdown.wide .sidebar__add {
            display: flex;
        }
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__item_dropdown.wide.active .sidebar__head>.icon:last-child {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__item_dropdown.wide.active .sidebar__body {
            display: block;
        }
    }

    .sidebar__top {
        position: relative;
    }

    .sidebar__top.active .sidebar__head {
        background: #EFEFEF;
        box-shadow: inset 0px -2px 1px rgba(0, 0, 0, 0.05), inset 0px 1px 1px #FFFFFF;
        color: #1A1D1F;
    }

    body.dark .sidebar__top.active .sidebar__head {
        background: #272B30;
        box-shadow: inset 0px -2px 1px rgba(0, 0, 0, 0.4), inset 0px 1px 1px rgba(255, 255, 255, 0.11);
        color: #FCFCFC;
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__item.visible:not(.wide) .sidebar__head {
            background: #EFEFEF;
            box-shadow: inset 0px -2px 1px rgba(0, 0, 0, 0.05), inset 0px 1px 1px #FFFFFF;
            color: #1A1D1F;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar__item.visible:not(.wide) .sidebar__head {
            background: none;
            box-shadow: none;
            color: #6F767E;
        }
    }

    @media only screen and (max-width: 1259px) {
        body.dark .sidebar__item.visible:not(.wide) .sidebar__head {
            background: #272B30;
            box-shadow: inset 0px -2px 1px rgba(0, 0, 0, 0.4), inset 0px 1px 1px rgba(255, 255, 255, 0.11);
            color: #FCFCFC;
        }

        body.dark .sidebar__item.visible:not(.wide) .sidebar__head .icon {
            fill: #FCFCFC;
        }
    }

    @media only screen and (max-width: 767px) {
        body.dark .sidebar__item.visible:not(.wide) .sidebar__head {
            background: none;
            box-shadow: none;
            color: #6F767E;
        }

        body.dark .sidebar__item.visible:not(.wide) .sidebar__head .icon {
            fill: #6F767E;
        }
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__head {
            font-size: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar__head {
            font-size: 15px;
        }
    }

    .sidebar__head .icon {
        transition: fill .2s, -webkit-transform .2s;
        transition: transform .2s, fill .2s;
        transition: transform .2s, fill .2s, -webkit-transform .2s;
    }

    .sidebar__head .icon:first-child {
        margin-right: 12px;
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__head .icon:first-child {
            margin-right: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar__head .icon:first-child {
            margin-right: 12px;
        }
    }

    .sidebar__head .icon:last-child {
        margin-left: auto;
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__head .icon:last-child {
            display: none;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar__head .icon:last-child {
            display: inline-block;
        }
    }

    .sidebar__add {
        position: absolute;
        top: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        right: 48px;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        border: 2px solid #EFEFEF;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        font-size: 0;
        transition: border-color .2s;
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__add {
            display: none;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar__add {
            display: flex;
        }
    }

    body.dark .sidebar__add {
        border-color: #33383F;
    }

    .sidebar__add .icon {
        width: 10px;
        height: 10px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .sidebar__add:hover {
        border-color: #1A1D1F;
    }

    .sidebar__add:hover .icon {
        fill: #1A1D1F;
    }

    body.dark .sidebar__add:hover {
        border-color: #9A9FA5;
    }

    body.dark .sidebar__add:hover .icon {
        fill: #9A9FA5;
    }

    .sidebar__add.active {
        border-color: #9A9FA5;
    }

    .sidebar__add.active .icon {
        fill: #9A9FA5;
    }

    .sidebar__body {
        position: relative;
        display: none;
        padding-left: 36px;
    }

    .sidebar__body:before {
        content: "";
        position: absolute;
        top: 0;
        left: 23px;
        bottom: 32px;
        width: 2px;
        border-radius: 2px;
        background: #EFEFEF;
    }

    body.dark .sidebar__body:before {
        background: #272B30;
    }

    .sidebar__link:before {
        content: "";
        position: absolute;
        top: 12px;
        left: -13px;
        width: 12px;
        height: 12px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' fill='none' viewBox='0 0 14 14'%3E%3Cpath d='M1 1v4a8 8 0 0 0 8 8h4' stroke='%23efefef' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E") no-repeat 50% 50%/100% auto;
    }

    body.dark .sidebar__link:before {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' fill='none' viewBox='0 0 14 14'%3E%3Cpath d='M1 1v4a8 8 0 0 0 8 8h4' stroke='%23272B30' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E");
    }

    .sidebar__link .icon {
        position: absolute;
        top: 50%;
        right: 12px;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        width: 24px;
        height: 24px;
        opacity: 0;
        fill: #1A1D1F;
        transition: opacity .2s;
    }

    body.dark .sidebar__link .icon {
        fill: #FCFCFC;
    }

    .sidebar__link:hover {
        color: #1A1D1F;
    }

    body.dark .sidebar__link:hover {
        color: #FCFCFC;
    }

    .sidebar__link.active {
        background: #EFEFEF;
        box-shadow: inset 0px -2px 1px rgba(0, 0, 0, 0.05), inset 0px 1px 1px #FFFFFF;
        color: #1A1D1F;
    }

    body.dark .sidebar__link.active {
        background: #272B30;
        box-shadow: inset 0px -2px 1px rgba(0, 0, 0, 0.4), inset 0px 1px 1px rgba(255, 255, 255, 0.11);
        color: #FCFCFC;
    }

    .sidebar__link.active .icon {
        opacity: 1;
    }

    .sidebar__counter {
        position: relative;
        z-index: 2;
        flex-shrink: 0;
        min-width: 24px;
        margin-left: auto;
        border-radius: 6px;
        text-align: center;
        line-height: 24px;
        color: #1A1D1F;
    }

    .sidebar__toggle {
        display: none;
        width: 48px;
        height: 48px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__toggle {
            display: inline-block;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar__toggle {
            display: none;
        }
    }

    .sidebar__toggle .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
    }

    .sidebar__toggle .icon:nth-child(2) {
        display: none;
    }

    .sidebar__close {
        display: none;
    }

    @media only screen and (max-width: 767px) {
        .sidebar__close {
            display: block;
            position: absolute;
            top: 16px;
            left: 16px;
            width: 48px;
            height: 48px;
        }

        .sidebar__close .icon {
            width: 24px;
            height: 24px;
            fill: #1A1D1F;
        }

        body.dark .sidebar__close .icon {
            fill: #FCFCFC;
        }
    }

    .sidebar__foot {
        margin-top: 24px;
        padding-top: 18px;
        border-top: 2px solid #F4F4F4;
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__foot {
            margin-top: 12px;
            padding-top: 12px;
        }
    }

    body.dark .sidebar__foot {
        border-color: #272B30;
    }

    .sidebar .theme {
        margin-top: 16px;
    }

    .sidebar__help .sidebar__counter {
        background: #CABDFF;
    }

    @media only screen and (max-width: 1259px) {
        .sidebar__help .sidebar__counter {
            display: none;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar__help .sidebar__counter {
            display: block;
        }
    }

    @media only screen and (max-width: 1259px) {
        .sidebar+.overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 25;
            background: rgba(244, 244, 244, 0.8);
            visibility: hidden;
            opacity: 0;
            transition: all .2s;
        }

        body.dark .sidebar+.overlay {
            background: rgba(39, 43, 48, 0.9);
        }

        .sidebar+.overlay.active {
            visibility: visible;
            opacity: 1;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar+.overlay {
            display: none;
        }
    }

    .theme {
        display: block;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        font-size: 0;
    }

    @media only screen and (max-width: 1259px) {
        .theme.wide .theme__input:checked+.theme__inner .theme__box:first-child {
            display: flex;
        }

        .theme.wide .theme__inner {
            display: flex;
            padding: 4px 2px;
            border-radius: 20px;
        }

        .theme.wide .theme__box {
            display: flex;
            height: 32px;
            border-radius: 16px;
            font-size: 15px;
        }

        .theme.wide .theme__box .icon {
            margin-right: 8px;
        }
    }

    .theme__input {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .theme__input:checked+.theme__inner {
        background: #111315;
    }

    .theme__input:checked+.theme__inner .theme__box:first-child {
        background: none;
        box-shadow: none;
        color: #6F767E;
    }

    @media only screen and (max-width: 1259px) {
        .theme__input:checked+.theme__inner .theme__box:first-child {
            display: none;
        }
    }

    @media only screen and (max-width: 767px) {
        .theme__input:checked+.theme__inner .theme__box:first-child {
            display: flex;
        }
    }

    .theme__input:checked+.theme__inner .theme__box:first-child .icon {
        fill: #6F767E;
    }

    .theme__input:checked+.theme__inner .theme__box:first-child:hover {
        color: #FCFCFC;
    }

    .theme__input:checked+.theme__inner .theme__box:first-child:hover .icon {
        fill: #FCFCFC;
    }

    .theme__input:checked+.theme__inner .theme__box:nth-child(2) {
        box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.25), inset 0px -1px 1px rgba(0, 0, 0, 0.49), inset 0px 2px 1px rgba(255, 255, 255, 0.06);
        background: #272B30;
        color: #FCFCFC;
    }

    .theme__input:checked+.theme__inner .theme__box:nth-child(2) .icon {
        fill: #FCFCFC;
    }

    @media only screen and (max-width: 1259px) {
        .theme__input:checked+.theme__inner .theme__box:nth-child(2) {
            display: flex;
        }
    }

    .theme__inner {
        position: relative;
        display: flex;
        padding: 4px 2px;
        border-radius: 20px;
        background: #F4F4F4;
        transition: background .2s;
    }

    @media only screen and (max-width: 1259px) {
        .theme__inner {
            display: block;
            padding: 2px;
            border-radius: 50%;
        }
    }

    @media only screen and (max-width: 767px) {
        .theme__inner {
            display: flex;
            padding: 4px 2px;
            border-radius: 20px;
        }
    }

    .theme__box {
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 0 0 calc(50% - 4px);
        height: 32px;
        margin: 2px;
        border-radius: 16px;
        font-size: 15px;
        transition: background .2s, box-shadow .2s, color .2s;
    }

    @media only screen and (max-width: 1259px) {
        .theme__box {
            height: 40px;
            border-radius: 50%;
            font-size: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .theme__box {
            height: 32px;
            border-radius: 16px;
            font-size: 15px;
        }
    }

    .theme__box .icon {
        margin-right: 8px;
        width: 24px;
        height: 24px;
        transition: fill .2s;
    }

    @media only screen and (max-width: 1259px) {
        .theme__box .icon {
            margin-right: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .theme__box .icon {
            margin-right: 8px;
        }
    }

    .theme__box:first-child {
        background: #FCFCFC;
        box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.25), inset 0px -1px 1px rgba(0, 0, 0, 0.04), inset 0px 2px 0px rgba(255, 255, 255, 0.25);
    }

    .theme__box:nth-child(2) {
        color: #6F767E;
    }

    @media only screen and (max-width: 1259px) {
        .theme__box:nth-child(2) {
            display: none;
        }
    }

    @media only screen and (max-width: 767px) {
        .theme__box:nth-child(2) {
            display: flex;
        }
    }

    .theme__box:nth-child(2) .icon {
        fill: #6F767E;
    }

    .theme__box:hover {
        color: #1A1D1F;
    }

    .theme__box:hover .icon {
        fill: #1A1D1F;
    }

    .help {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 30;
        display: flex;
        flex-direction: column;
        width: 340px;
        padding: 24px 12px;
        background: #FFFFFF;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
        transition: -webkit-transform .3s;
        transition: transform .3s;
        transition: transform .3s, -webkit-transform .3s;
    }

    @media only screen and (max-width: 1339px) {
        .help {
            width: 320px;
            padding: 16px 8px;
        }
    }

    @media only screen and (max-width: 767px) {
        .help {
            width: 100%;
        }
    }

    body.dark .help {
        background: #111315;
    }

    .help.active {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }

    @media only screen and (max-width: 1259px) {
        .help.active {
            box-shadow: 4px 0 32px rgba(17, 19, 21, 0.05);
        }
    }

    .help__head {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
        padding: 12px;
    }

    .help__head>.icon {
        width: 24px;
        height: 24px;
        margin-right: 12px;
        fill: #1A1D1F;
    }

    body.dark .help__head>.icon {
        fill: #FCFCFC;
    }

    .help__close {
        margin-left: auto;
    }

    .help__close .icon {
        width: 24px;
        height: 24px;
        fill: #1A1D1F;
        transition: fill .2s;
    }

    body.dark .help__close .icon {
        fill: #FCFCFC;
    }

    .help__close:hover .icon {
        fill: #2A85FF;
    }

    body.dark .help__close:hover .icon {
        fill: #2A85FF;
    }

    .help__list {
        margin-bottom: auto;
        padding: 24px 0;
        border-top: 1px solid #EFEFEF;
    }

    body.dark .help__list {
        border-color: rgba(111, 118, 126, 0.2);
    }

    .help__menu {
        display: flex;
        flex-direction: column;
    }

    .help__item {
        display: flex;
        align-items: center;
        padding: 12px;
        border-radius: 12px;
        color: #1A1D1F;
        cursor: pointer;
        transition: all .2s;
    }

    @media only screen and (max-width: 1339px) {
        .help__item {
            padding: 6px;
        }
    }

    body.dark .help__item {
        color: #FCFCFC;
    }

    .help__item:hover {
        background: #F4F4F4;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    body.dark .help__item:hover {
        background: #1A1D1F;
        box-shadow: none;
    }

    .help__item:not(:last-child) {
        margin-bottom: 8px;
    }

    .help__preview {
        flex-shrink: 0;
        width: 96px;
        height: 72px;
        margin-right: 16px;
    }

    .help__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 8px;
    }

    .help__title {
        margin-bottom: 8px;
    }

    .help__line {
        display: flex;
        align-items: center;
    }

    .help__status {
        margin-right: 4px;
        color: #1A1D1F;
    }

    .help__user {
        display: flex;
        align-items: center;
        padding: 1px 8px 1px 1px;
        border: 1px solid #EFEFEF;
        border-radius: 4px;
    }

    body.dark .help__user {
        border-color: #272B30;
    }

    .help__avatar {
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin-right: 4px;
        font-size: 0;
    }

    .help__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 2px;
    }

    .help__time {
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        color: #6F767E;
    }

    .help__link {
        display: flex;
        align-items: center;
        height: 48px;
        padding: 0 12px;
        border-radius: 12px;
        color: #6F767E;
        transition: all .2s;
    }

    .help__link .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .help__link>.icon {
        margin-right: 12px;
    }

    .help__link:hover {
        color: #1A1D1F;
    }

    .help__link:hover .icon {
        fill: #1A1D1F;
    }

    body.dark .help__link:hover {
        color: #FCFCFC;
    }

    body.dark .help__link:hover .icon {
        fill: #FCFCFC;
    }

    .help__link:not(:last-child) {
        margin-bottom: 8px;
    }

    @media only screen and (max-width: 1339px) {
        .help__link:not(:last-child) {
            margin-bottom: 4px;
        }
    }

    .help__arrow {
        margin-left: auto;
    }

    .help__arrow .icon {
        width: 24px;
        height: 24px;
    }

    .help__counter {
        flex-shrink: 0;
        min-width: 24px;
        margin-left: auto;
        border-radius: 6px;
        background: #FFBC99;
        text-align: center;
        line-height: 24px;
        color: #1A1D1F;
    }

    .help+.overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 25;
        background: rgba(244, 244, 244, 0.8);
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    body.dark .help+.overlay {
        background: rgba(39, 43, 48, 0.9);
    }

    .help+.overlay.active {
        visibility: visible;
        opacity: 1;
    }

    .card {
        position: relative;
        padding: 24px;
        background: #FCFCFC;
        border-radius: 8px;
    }

    @media only screen and (max-width: 767px) {
        .card {
            padding: 16px;
        }
    }

    body.dark .card {
        background: #1A1D1F;
    }

    .card__head {
        display: flex;
        align-items: center;
        min-height: 40px;
        margin-bottom: 32px;
    }

    @media only screen and (max-width: 767px) {
        .card__head {
            margin-bottom: 24px;
        }
    }

    @media only screen and (max-width: 767px) {
        .card__head_wide {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .card__head_wide .card__title {
            margin-bottom: 16px;
        }
    }

    .card__title {
        margin-right: auto;
    }

    @media only screen and (max-width: 767px) {
        .card__title {
            padding-top: 6px;
            padding-bottom: 6px;
        }
    }

    .card__chart {
        width: auto;
    }

    .card__chart_product-views {
        height: 274px;
        margin-left: -10px;
        margin-bottom: -10px;
    }

    .card__chart_product-views-small {
        height: 172px;
        margin-left: -10px;
        margin-bottom: -10px;
    }

    .card__chart_traffic-channel {
        height: 358px;
        margin-left: -10px;
    }

    .card__chart_active-customers {
        height: 244px;
        margin-left: -10px;
        margin-bottom: -10px;
    }

    .card__chart_top-country {
        height: 274px;
        margin-bottom: -10px;
    }

    @media only screen and (max-width: 767px) {
        .card__chart_top-country {
            margin-top: -10px;
            margin-bottom: 0;
        }
    }

    .card__chart_new-customers {
        height: 274px;
        margin-bottom: -10px;
    }

    @media only screen and (max-width: 1023px) {
        .card__chart_new-customers {
            max-width: 310px;
            margin: 0 auto;
        }
    }

    @media only screen and (max-width: 767px) {
        .card__chart_new-customers {
            margin: -10px auto 0;
        }
    }

    .card__chart_performance-by-day {
        height: 250px;
        margin-left: -15px;
        margin-bottom: -10px;
    }

    .card__chart_product-sales {
        height: 335px;
        margin-left: -15px;
        margin-bottom: -15px;
    }

    .card__full {
        width: 40px;
        height: 40px;
        margin-left: auto;
    }

    .card__full .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .card__full:hover .icon {
        fill: #2A85FF;
    }

    .card__sorting {
        display: flex;
        margin-left: auto;
    }

    .card__sorting .card__link {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 40px;
        height: 40px;
        border-radius: 8px;
    }

    .card__sorting .card__link .icon {
        width: 24px;
        height: 24px;
        fill: #9A9FA5;
        transition: fill .2s;
    }

    .card__sorting .card__link:hover .icon {
        fill: #1A1D1F;
    }

    body.dark .card__sorting .card__link:hover .icon {
        fill: #FCFCFC;
    }

    .card__sorting .card__link.active {
        background: #FCFCFC;
        box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.1), inset 0px -1px 1px rgba(0, 0, 0, 0.04), inset 0px 2px 0px rgba(255, 255, 255, 0.25);
    }

    .card__sorting .card__link.active .icon {
        fill: #1A1D1F;
    }

    body.dark .card__sorting .card__link.active {
        box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.1), inset 0px -1px 1px rgba(0, 0, 0, 0.04), inset 0px 2px 0px rgba(255, 255, 255, 0.05);
        background: #111315;
    }

    body.dark .card__sorting .card__link.active .icon {
        fill: #FCFCFC;
    }

    .card__sorting .card__link:not(:last-child) {
        margin-right: 12px;
    }

    .card__nav {
        display: flex;
    }

    @media only screen and (max-width: 767px) {
        .card__nav {
            width: 100%;
        }
    }

    .card__nav .card__link {
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    @media only screen and (max-width: 767px) {
        .card__nav .card__link {
            flex: 1;
        }
    }

    .card__nav .card__link:hover,
    .card__nav .card__link.active {
        color: #1A1D1F;
    }

    body.dark .card__nav .card__link:hover,
    body.dark .card__nav .card__link.active {
        color: #FCFCFC;
    }

    .card__nav .card__link.active {
        background: #EFEFEF;
    }

    body.dark .card__nav .card__link.active {
        background: #272B30;
    }

    .card__nav .card__link:not(:last-child) {
        margin-right: 8px;
    }

    @media only screen and (max-width: 767px) {
        .card__nav .card__link:not(:last-child) {
            margin-right: 0;
        }
    }

    .card__legend {
        display: flex;
        justify-content: space-between;
        margin-top: 12px;
    }

    .card__indicator {
        display: flex;
        align-items: center;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 700;
    }

    .card__color {
        flex-shrink: 0;
        width: 16px;
        height: 16px;
        margin-right: 8px;
        border-radius: 4px;
    }

    .card:not(:last-child) {
        margin-bottom: 8px;
    }

    .actions {
        position: relative;
        display: inline-block;
        z-index: 3;
    }

    .actions__button {
        position: relative;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #FFFFFF;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        transition: background .2s;
    }

    .actions__button .icon {
        width: 24px;
        height: 24px;
        transition: fill .2s;
        fill: #6F767E;
    }

    .actions__button:hover .icon {
        fill: #2A85FF;
    }

    body.dark .actions__button {
        background: #111315;
    }

    body.dark .actions__button:hover .icon {
        fill: #2A85FF;
    }

    .actions__body {
        position: absolute;
        top: calc(100% + 12px);
        right: -12px;
        width: 264px;
        z-index: 2;
        padding: 12px;
        border-radius: 16px;
        border: 1px solid transparent;
        box-shadow: 0px 40px 64px -12px rgba(0, 0, 0, 0.08), 0px 0px 14px -4px rgba(0, 0, 0, 0.05), 0px 32px 48px -8px rgba(0, 0, 0, 0.1);
        background: #FFFFFF;
        visibility: hidden;
        opacity: 0;
        -webkit-transform: translateY(3px);
        transform: translateY(3px);
        transition: all .2s;
    }

    body.dark .actions__body {
        background: #111315;
        border-color: #272B30;
    }

    .actions__body:before {
        content: "";
        position: absolute;
        right: 20px;
        bottom: 100%;
        width: 20px;
        height: 10px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='10' fill='none' viewBox='0 0 20 10'%3E%3Cpath d='M6.927 1.687L0 10h20l-6.927-8.313a4 4 0 0 0-6.146 0z' fill='%23fff'/%3E%3C/svg%3E") no-repeat 50% 50%/100% auto;
    }

    body.dark .actions__body:before {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='10' fill='none' viewBox='0 0 20 10'%3E%3Cpath d='M6.927 1.687L0 10h20l-6.927-8.313a4 4 0 0 0-6.146 0z' fill='%23272B30'/%3E%3C/svg%3E");
    }

    .actions__option {
        display: flex;
        align-items: center;
        width: 100%;
        padding: 12px;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
        cursor: pointer;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .actions__option .icon {
        width: 24px;
        height: 24px;
        margin-right: 12px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .actions__option:hover,
    .actions__option.selectioned {
        background: #EFEFEF;
        color: #1A1D1F;
    }

    .actions__option:hover .icon,
    .actions__option.selectioned .icon {
        fill: #1A1D1F;
    }

    body.dark .actions__option:hover,
    body.dark .actions__option.selectioned {
        background: transparent;
        color: #FCFCFC;
    }

    body.dark .actions__option:hover .icon,
    body.dark .actions__option.selectioned .icon {
        fill: #FCFCFC;
    }

    .actions.active {
        z-index: 10;
    }

    .actions.active .actions__button {
        background: #EFEFEF;
    }

    .actions.active .actions__button .icon {
        fill: #1A1D1F;
    }

    body.dark .actions.active .actions__button {
        background: #272B30;
    }

    body.dark .actions.active .actions__button .icon {
        fill: #FCFCFC;
    }

    .actions.active .actions__body {
        visibility: visible;
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }

    .actions_small .actions__button {
        width: 32px;
        height: 32px;
    }

    .actions_small .actions__button .icon {
        width: 20px;
        height: 20px;
    }

    .actions_small .actions__body {
        right: -8px;
    }

    .actions_small .actions__body:before {
        right: 14px;
    }

    .actions_up .actions__body {
        top: auto;
        bottom: calc(100% + 12px);
        box-shadow: 0px 20px 32px -6px rgba(0, 0, 0, 0.08), 0px 0px 7px -4px rgba(0, 0, 0, 0.05), 0px 16px 24px -4px rgba(0, 0, 0, 0.1);
    }

    .actions_up .actions__body:before {
        top: 100%;
        bottom: auto;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .header {
        position: fixed;
        top: 0;
        left: 340px;
        right: 0;
        z-index: 20;
        display: none;
        align-items: center;
        padding: 24px 40px;
        background: #FCFCFC;
        box-shadow: inset 1px 0px 0px #F4F4F4, inset 0 -1px 0px #EFEFEF;
    }

    @media only screen and (max-width: 1339px) {
        .header {
            left: 300px;
            padding: 16px 24px;
        }
    }

    @media only screen and (max-width: 1259px) {
        .header {
            left: 96px;
        }
    }

    @media only screen and (max-width: 767px) {
        .header {
            left: 0;
            padding: 16px 24px 16px 16px;
        }
    }

    body.dark .header {
        background: #1A1D1F;
        box-shadow: inset 1px 0px 0px #111315, inset 0 -1px 0px #111315;
    }

    .header__burger {
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 48px;
        height: 48px;
        margin-right: auto;
    }

    @media only screen and (max-width: 767px) {
        .header__burger {
            display: flex;
        }
    }

    .header__burger:before,
    .header__burger:after {
        content: "";
        width: 16px;
        height: 2px;
        border-radius: 2px;
        background: #6F767E;
    }

    .header__burger:before {
        margin-bottom: 6px;
    }

    .header__control {
        display: flex;
        align-items: center;
        margin-left: auto;
    }

    @media only screen and (max-width: 767px) {
        .header__control {
            margin-left: 0;
        }
    }

    .header__control .header__button:not(:last-child),
    .header__item:not(:last-child),
    .header__search:not(:last-child) {
        margin-right: 24px;
    }

    .header__search {
        display: none;
        width: 48px;
        height: 48px;
    }

    @media only screen and (max-width: 767px) {
        .header__search {
            display: inline-block;
        }
    }

    .header__search .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .header__search.active .icon {
        fill: #1A1D1F;
    }

    body.dark .header__search.active .icon {
        fill: #FCFCFC;
    }

    @media only screen and (max-width: 1023px) {
        .header__control .header__button {
            display: none;
        }
    }

    .header__control .header__button .icon {
        width: 24px;
        height: 24px;
    }

    .header__item {
        position: relative;
    }

    @media only screen and (max-width: 767px) {
        .header__item {
            position: static;
        }
    }

    .header__item.active .header__body {
        visibility: visible;
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }

    .header__item_messages.active .header__head .icon,
    .header__item_notifications.active .header__head .icon {
        fill: #1A1D1F;
    }

    body.dark .header__item_messages.active .header__head .icon,
    body.dark .header__item_notifications.active .header__head .icon {
        fill: #FCFCFC;
    }

    .header__head {
        width: 48px;
        height: 48px;
    }

    .header__item_messages .header__head,
    .header__item_notifications .header__head {
        position: relative;
    }

    .header__item_messages .header__head .icon,
    .header__item_notifications .header__head .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .header__item_messages .header__head:hover .icon,
    .header__item_notifications .header__head:hover .icon {
        fill: #1A1D1F;
    }

    body.dark .header__item_messages .header__head:hover .icon,
    body.dark .header__item_notifications .header__head:hover .icon {
        fill: #FCFCFC;
    }

    .header__item_messages .header__head.active:before,
    .header__item_notifications .header__head.active:before {
        content: "";
        position: absolute;
        top: 10px;
        right: 10px;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        border: 2px solid #FFFFFF;
        background: #FF6A55;
    }

    body.dark .header__item_messages .header__head.active:before,
    body.dark .header__item_notifications .header__head.active:before {
        border-color: #1A1D1F;
    }

    .header__item_user .header__head {
        border-radius: 50%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .header__item_user .header__head img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    .header__body {
        position: absolute;
        top: calc(100% + 18px);
        border: 1px solid transparent;
        border-radius: 16px;
        box-shadow: 0px 40px 64px -12px rgba(0, 0, 0, 0.08), 0px 0px 14px -4px rgba(0, 0, 0, 0.05), 0px 32px 48px -8px rgba(0, 0, 0, 0.1);
        background: #FFFFFF;
        visibility: hidden;
        opacity: 0;
        -webkit-transform: translateY(3px);
        transform: translateY(3px);
        transition: all .2s;
    }

    @media only screen and (max-width: 1339px) {
        .header__body {
            top: calc(100% + 15px);
        }
    }

    @media only screen and (max-width: 767px) {
        .header__body {
            top: 100%;
            left: 16px;
        }
    }

    body.dark .header__body {
        background: #111315;
        border-color: #272B30;
    }

    .header__body:before {
        content: "";
        position: absolute;
        bottom: 100%;
        width: 20px;
        height: 10px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='10' fill='none' viewBox='0 0 20 10'%3E%3Cpath d='M6.927 1.687L0 10h20l-6.927-8.313a4 4 0 0 0-6.146 0z' fill='%23fff'/%3E%3C/svg%3E") no-repeat 50% 50%/100% auto;
    }

    body.dark .header__body:before {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='10' fill='none' viewBox='0 0 20 10'%3E%3Cpath d='M6.927 1.687L0 10h20l-6.927-8.313a4 4 0 0 0-6.146 0z' fill='%23111315'/%3E%3C/svg%3E");
    }

    .header__item_messages .header__body {
        right: -12px;
        width: 392px;
        padding: 12px 24px 24px;
    }

    @media only screen and (max-width: 767px) {
        .header__item_messages .header__body {
            right: 16px;
            width: auto;
            padding: 12px 16px 20px;
        }
    }

    .header__item_messages .header__body:before {
        right: 26px;
    }

    @media only screen and (max-width: 767px) {
        .header__item_messages .header__body:before {
            right: 165px;
        }
    }

    .header__item_notifications .header__body {
        right: -92px;
        width: 392px;
        padding: 12px 24px 24px;
    }

    @media only screen and (max-width: 1339px) {
        .header__item_notifications .header__body {
            right: -72px;
        }
    }

    @media only screen and (max-width: 767px) {
        .header__item_notifications .header__body {
            right: 16px;
            width: auto;
            padding: 12px 16px 20px;
        }
    }

    .header__item_notifications .header__body:before {
        right: 105px;
    }

    @media only screen and (max-width: 1339px) {
        .header__item_notifications .header__body:before {
            right: 84px;
        }
    }

    @media only screen and (max-width: 767px) {
        .header__item_notifications .header__body:before {
            right: 92px;
        }
    }

    .header__item_user .header__body {
        right: -20px;
        width: 280px;
        padding: 16px;
    }

    @media only screen and (max-width: 1339px) {
        .header__item_user .header__body {
            right: 0;
            border-radius: 12px;
        }
    }

    @media only screen and (max-width: 767px) {
        .header__item_user .header__body {
            right: 16px;
            width: auto;
            padding: 12px 16px 20px;
        }
    }

    .header__item_user .header__body:before {
        right: 33px;
    }

    @media only screen and (max-width: 1339px) {
        .header__item_user .header__body:before {
            right: 13px;
        }
    }

    @media only screen and (max-width: 767px) {
        .header__item_user .header__body:before {
            right: 21px;
        }
    }

    .header__top {
        display: flex;
        align-items: center;
        margin: 0 -12px 12px 0;
    }

    @media only screen and (max-width: 767px) {
        .header__top {
            margin-right: -8px;
        }
    }

    .header__title {
        margin-right: auto;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .header__title {
            font-size: 18px;
        }
    }

    .header .actions__button {
        background: #EFEFEF;
    }

    body.dark .header .actions__button {
        background: #272B30;
    }

    body.dark .header .actions__button .icon {
        fill: #FCFCFC;
    }

    .header__list {
        margin: 0 -12px;
    }

    @media only screen and (max-width: 767px) {
        .header__item_messages .header__list {
            margin: 0 -8px;
        }
    }

    .header__message,
    .header__notification {
        position: relative;
        display: flex;
        align-items: center;
        padding: 12px;
        transition: background .2s;
    }

    .header__message:after,
    .header__notification:after {
        content: "";
        position: absolute;
        right: 12px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #9A9FA5;
        transition: background .2s;
    }

    .header__message:not(:last-child):before,
    .header__notification:not(:last-child):before {
        content: "";
        position: absolute;
        left: 12px;
        right: 12px;
        bottom: 0;
        height: 1px;
        background: #EFEFEF;
    }

    @media only screen and (max-width: 767px) {

        .header__message:nth-child(n+3),
        .header__notification:nth-child(n+3) {
            display: none;
        }
    }

    @media only screen and (max-width: 639px) {

        .header__message:nth-child(n+3),
        .header__notification:nth-child(n+3) {
            display: flex;
        }
    }

    @media only screen and (max-width: 639px) {

        .header__message:nth-child(n+6),
        .header__notification:nth-child(n+6) {
            display: none;
        }
    }

    .header__message {
        border-radius: 12px;
    }

    @media only screen and (max-width: 767px) {
        .header__message {
            padding: 8px;
        }
    }

    .header__message:hover {
        background: #EFEFEF;
    }

    body.dark .header__message:hover {
        background: #272B30;
    }

    @media only screen and (max-width: 767px) {
        .header__message:hover {
            background: none;
        }
    }

    .header__message:hover .header__avatar.online:before {
        border-color: #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .header__message:hover .header__avatar.online:before {
            border-color: #FFFFFF;
        }
    }

    body.dark .header__message:hover .header__avatar.online:before {
        border-color: #272B30;
    }

    @media only screen and (max-width: 767px) {
        body.dark .header__message:hover .header__avatar.online:before {
            border-color: #111315;
        }
    }

    .header__message:after {
        top: 20px;
    }

    @media only screen and (max-width: 767px) {
        .header__message:after {
            top: 14px;
        }
    }

    .header__message.new:after {
        background: #2A85FF;
    }

    .header__message:not(:last-child) {
        margin-bottom: 8px;
    }

    body.dark .header__message:not(:last-child):before {
        background: transparent;
    }

    .header__notification {
        border-radius: 8px;
    }

    .header__notification:hover {
        background: #F4F4F4;
    }

    @media only screen and (max-width: 767px) {
        .header__notification:hover {
            background: none;
        }
    }

    .header__notification:hover .icon {
        border-color: #F4F4F4;
    }

    body.dark .header__notification:hover {
        background: #33383F;
    }

    body.dark .header__notification:hover .icon {
        border-color: #33383F;
    }

    .header__notification:after {
        top: 18px;
    }

    .header__notification.new:after {
        background: #2A85FF;
    }

    body.dark .header__notification:not(:last-child):before {
        background: #272B30;
    }

    .header__avatar {
        position: relative;
        flex-shrink: 0;
    }

    .header__avatar>img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .header__item_messages .header__avatar {
        width: 56px;
        height: 56px;
    }

    @media only screen and (max-width: 767px) {
        .header__item_messages .header__avatar {
            width: 48px;
            height: 48px;
        }
    }

    .header__item_messages .header__avatar.online:before {
        content: "";
        position: absolute;
        top: -2px;
        left: -2px;
        width: 20px;
        height: 20px;
        border: 4px solid #FFFFFF;
        background: #83BF6E;
        border-radius: 50%;
        transition: border-color .2s;
    }

    body.dark .header__item_messages .header__avatar.online:before {
        border-color: #111315;
    }

    .header__item_notifications .header__avatar {
        width: 48px;
        height: 48px;
    }

    .header__icon {
        position: absolute;
        right: -2px;
        bottom: -2px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid #FFFFFF;
        transition: border-color .2s;
    }

    body.dark .header__icon {
        border-color: #111315;
    }

    .header__icon img {
        width: 12px;
        height: 12px;
    }

    .header__details {
        padding-left: 12px;
    }

    .header__item_messages .header__details {
        flex: 0 0 calc(100% - 56px);
        width: calc(100% - 56px);
    }

    .header__item_notifications .header__details {
        flex: 0 0 calc(100% - 48px);
        width: calc(100% - 48px);
    }

    .header__line {
        display: flex;
        align-items: center;
        padding-right: 24px;
    }

    .header__item_messages .header__line {
        margin-bottom: 4px;
    }

    .header__subtitle {
        font-weight: 700;
        color: #1A1D1F;
    }

    body.dark .header__subtitle {
        color: #FCFCFC;
    }

    .header__item_messages .header__subtitle {
        margin-right: auto;
    }

    .header__item_notifications .header__subtitle {
        margin-right: 4px;
    }

    .header__login {
        font-weight: 500;
        color: #9A9FA5;
    }

    .header__item_messages .header__login {
        margin-left: 16px;
    }

    .header__item_notifications .header__login {
        margin-right: auto;
    }

    .header__time {
        margin-left: 16px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .header__content {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: 500;
        color: #6F767E;
    }

    .header__item_messages .header__content {
        padding-right: 40px;
    }

    .header__item_notifications .header__content strong {
        font-weight: 700;
        color: #1A1D1F;
    }

    body.dark .header__item_notifications .header__content strong {
        color: #FCFCFC;
    }

    .header__body .header__button {
        width: 100%;
        margin-top: 24px;
    }

    @media only screen and (max-width: 767px) {
        .header__body .header__button {
            margin-top: 16px;
        }
    }

    .header__nav:not(:last-child) {
        margin-bottom: 12px;
        padding-bottom: 12px;
        border-bottom: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .header__nav:not(:last-child) {
            margin-bottom: 8px;
            padding-bottom: 8px;
        }
    }

    body.dark .header__nav:not(:last-child) {
        border-color: #272B30;
    }

    .header__link {
        display: flex;
        align-items: center;
        width: 100%;
        height: 48px;
        padding: 0 12px;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    .header__link .icon {
        width: 24px;
        height: 24px;
        margin-right: 12px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .header__link:hover,
    .header__link.active {
        color: #1A1D1F;
    }

    .header__link:hover .icon,
    .header__link.active .icon {
        fill: #1A1D1F;
    }

    body.dark .header__link:hover,
    body.dark .header__link.active {
        color: #FCFCFC;
    }

    body.dark .header__link:hover .icon,
    body.dark .header__link.active .icon {
        fill: #FCFCFC;
    }

    .header__link.active {
        background: #F4F4F4;
    }

    body.dark .header__link.active {
        background: transparent;
    }

    .header__link.color {
        color: #8E59FF;
    }

    .header__link.color .icon {
        fill: #8E59FF;
    }

    body.dark .header__link.color {
        color: #8E59FF;
    }

    body.dark .header__link.color .icon {
        fill: #8E59FF;
    }

    .header__link.color:hover {
        opacity: .8;
    }

    .header__btns {
        display: none;
        align-items: center;
        margin-left: auto;
    }

    @media only screen and (max-width: 767px) {
        .header__btns {
            margin-left: 0;
        }
    }

    .header__btns .header__button {
        white-space: nowrap;
    }

    .header__btns .header__link {
        margin-right: 32px;
        font-size: 15px;
        font-weight: 700;
        line-height: 1.6;
        color: #1A1D1F;
        transition: color .2s;
    }

    body.dark .header__btns .header__link {
        color: #FCFCFC;
    }

    @media only screen and (max-width: 767px) {
        .header__btns .header__link {
            margin-right: 24px;
        }
    }

    .header__btns .header__link:hover {
        color: #2A85FF;
    }

    body.dark .header__btns .header__link:hover {
        color: #2A85FF;
    }

    .header.unauthorized .header__control {
        display: none;
    }

    .header.unauthorized .header__btns {
        display: flex;
    }

    .search {
        position: relative;
        flex-shrink: 0;
        width: 360px;
    }

    @media only screen and (max-width: 767px) {
        .search {
            position: absolute;
            left: 0;
            right: 0;
            top: 80px;
            width: 100%;
            padding: 12px 16px;
            background: #FFFFFF;
            box-shadow: 0 8px 12px rgba(17, 19, 21, 0.05);
            visibility: hidden;
            opacity: 0;
            transition: all .2s;
        }

        body.dark .search {
            background: #111315;
        }
    }

    .search.active .search__start,
    .search.active .search__result {
        visibility: hidden;
        opacity: 0;
    }

    .search.active .search__direction,
    .search.active .search__close {
        visibility: visible;
        opacity: 1;
    }

    .search.active .search__body {
        visibility: visible;
        opacity: 1;
    }

    @media only screen and (max-width: 767px) {
        .search.visible {
            visibility: visible;
            opacity: 1;
        }
    }

    .search__head {
        position: relative;
        z-index: 2;
    }

    .search__start,
    .search__direction,
    .search__result,
    .search__head .search__close {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        transition: all .2s;
    }

    .search__start .icon,
    .search__direction .icon,
    .search__result .icon,
    .search__head .search__close .icon {
        width: 24px;
        height: 24px;
        transition: fill .2s;
    }

    .search__start {
        left: 12px;
    }

    .search__start .icon {
        fill: #6F767E;
    }

    .search__start:hover .icon {
        fill: #1A1D1F;
    }

    .search__result {
        right: 8px;
        width: 56px;
        height: 32px;
        background: #FFFFFF;
        border-radius: 8px;
        box-shadow: inset 0px -1px 2px rgba(0, 0, 0, 0.05), inset 0px -1px 1px rgba(0, 0, 0, 0.04), inset 0px 2px 0px rgba(255, 255, 255, 0.25);
        font-size: 16px;
        font-weight: 600;
        color: #1A1D1F;
    }

    body.dark .search__result {
        background: #1A1D1F;
        box-shadow: inset 0px -1px 2px rgba(0, 0, 0, 0.05), inset 0px -1px 1px rgba(0, 0, 0, 0.04), inset 0px 1px 0px rgba(255, 255, 255, 0.08);
        color: #FCFCFC;
    }

    @media only screen and (max-width: 767px) {
        .search__result {
            display: none;
        }
    }

    .search__result:hover {
        color: #2A85FF;
    }

    .search__direction {
        left: 10px;
    }

    .search__direction .icon {
        fill: #2A85FF;
    }

    .search__direction:hover {
        -webkit-transform: translate(-2px, -50%);
        transform: translate(-2px, -50%);
    }

    .search__head .search__close {
        right: 10px;
        width: 32px;
        height: 32px;
    }

    .search__head .search__close .icon {
        fill: #9A9FA5;
    }

    .search__head .search__close:hover .icon {
        fill: #FF6A55;
    }

    .search__direction,
    .search__head .search__close {
        visibility: hidden;
        opacity: 0;
    }

    .search__input {
        width: 100%;
        height: 48px;
        padding: 0 68px 0 42px;
        background: #F4F4F4;
        border: 2px solid transparent;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #1A1D1F;
        transition: all .2s;
    }

    body.dark .search__input {
        background: #272B30;
        color: #FCFCFC;
    }

    .search__input::-webkit-input-placeholder {
        color: #9A9FA5;
    }

    .search__input::-moz-placeholder {
        color: #9A9FA5;
    }

    .search__input:-ms-input-placeholder {
        color: #9A9FA5;
    }

    .search__input::-ms-input-placeholder {
        color: #9A9FA5;
    }

    .search__input::placeholder {
        color: #9A9FA5;
    }

    .search__input:focus {
        border-color: #2A85FF;
        background: #FFFFFF;
    }

    body.dark .search__input:focus {
        background: #111315;
    }

    .search__body {
        position: absolute;
        top: -12px;
        left: -12px;
        right: -12px;
        padding: 84px 12px 12px;
        border: 1px solid transparent;
        box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.05), 0px 32px 48px -8px rgba(0, 0, 0, 0.1);
        background: #FFFFFF;
        border-radius: 16px;
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    @media only screen and (max-width: 767px) {
        .search__body {
            top: 100%;
            left: 0;
            right: 0;
            max-height: calc(100vh - 152px);
            padding: 16px 8px;
            border-radius: 0;
            border-top: 1px solid #EFEFEF;
            box-shadow: 0 12px 32px rgba(17, 19, 21, 0.05);
            overflow: auto;
        }
    }

    body.dark .search__body {
        background: #1A1D1F;
        border-color: #272B30;
    }

    .search__box:not(:last-child) {
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .search__box:not(:last-child) {
        border-color: #272B30;
    }

    @media only screen and (max-width: 767px) {
        .search__box:not(:last-child) {
            margin-bottom: 16px;
            padding-bottom: 16px;
        }
    }

    .search__category {
        margin-bottom: 12px;
        padding-left: 12px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .search__item,
    .search__suggestion {
        display: flex;
        align-items: center;
        padding: 12px;
        cursor: pointer;
    }

    .search__link {
        display: flex;
        align-items: center;
        flex-grow: 1;
    }

    .search__link:hover .search__title {
        color: #2A85FF;
    }

    .search__suggestion:hover .search__title {
        color: #2A85FF;
    }

    .search__suggestion:hover .search__arrow {
        -webkit-transform: translateX(2px);
        transform: translateX(2px);
    }

    .search__preview {
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        margin-right: 16px;
        border-radius: 8px;
        overflow: hidden;
    }

    .search__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .search__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        margin-right: 16px;
        border-radius: 50%;
        border: 2px solid #CABDFF;
    }

    .search__icon .icon {
        width: 24px;
        height: 24px;
        fill: #1A1D1F;
    }

    body.dark .search__icon .icon {
        fill: #FCFCFC;
    }

    .search__details {
        flex-grow: 1;
    }

    .search__content {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .search__item .search__content {
        margin-bottom: 4px;
    }

    .search__title {
        color: #1A1D1F;
        transition: color .2s;
    }

    body.dark .search__title {
        color: #FCFCFC;
    }

    .search__suggestion .search__title {
        margin-bottom: 4px;
    }

    .search__remove {
        flex-shrink: 0;
        margin-left: 24px;
    }

    .search__remove .icon {
        width: 24px;
        height: 24px;
        fill: #9A9FA5;
        transition: fill .2s;
    }

    .search__remove:hover .icon {
        fill: #FF6A55;
    }

    .search__arrow {
        margin-left: 24px;
        transition: -webkit-transform .2s;
        transition: transform .2s;
        transition: transform .2s, -webkit-transform .2s;
    }

    .search__arrow .icon {
        width: 24px;
        height: 24px;
        fill: #9A9FA5;
    }

    .overview__nav {
        display: flex;
        margin-bottom: 32px;
        padding: 8px;
        background: #F4F4F4;
        border-radius: 20px;
    }

    @media only screen and (max-width: 767px) {
        .overview__nav {
            margin-bottom: 24px;
        }
    }

    body.dark .overview__nav {
        background: rgba(17, 19, 21, 0.5);
    }

    .overview__link {
        display: flex;
        padding: 20px;
        flex: 0 0 50%;
        border-radius: 12px;
        color: #1A1D1F;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        transition: all .2s;
    }

    @media only screen and (max-width: 1419px) {
        .overview__link {
            padding: 20px 16px;
        }
    }

    @media only screen and (max-width: 767px) {
        .overview__link {
            display: block;
        }
    }

    body.dark .overview__link {
        color: #FCFCFC;
    }

    .overview__link.active {
        background: #FCFCFC;
        box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.25), inset 0px -1px 1px rgba(0, 0, 0, 0.04), inset 0px 2px 0px rgba(255, 255, 255, 0.25);
    }

    body.dark .overview__link.active {
        background: #272B30;
        box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.25), inset 0px -1px 1px rgba(0, 0, 0, 0.04), inset 0px 2px 0px rgba(255, 255, 255, 0.06);
    }

    .overview__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 40px;
        height: 40px;
        margin-right: 16px;
        border-radius: 50%;
    }

    @media only screen and (max-width: 767px) {
        .overview__icon {
            display: none;
        }
    }

    .overview__icon .icon {
        width: 24px;
        height: 24px;
    }

    .overview__subtitle {
        display: flex;
        align-items: center;
        margin-bottom: 4px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .overview .tooltip .icon {
        fill: #9A9FA5;
    }

    .overview__counter {
        font-size: 48px;
        font-weight: 600;
        line-height: 1;
        letter-spacing: -.03em;
    }

    @media only screen and (max-width: 1419px) {
        .overview__counter {
            font-size: 40px;
            line-height: 48px;
        }
    }

    .overview .balance {
        margin: -12px -12px 0 auto;
    }

    @media only screen and (max-width: 767px) {
        .overview .balance {
            margin: 4px 0 0;
        }
    }

    body.dark .overview .balance {
        background: #272B30 !important;
    }

    .overview__item {
        display: none;
    }

    .overview__chart {
        width: auto;
        height: 238px;
        margin: 0 0 -10px -10px;
    }

    @media only screen and (max-width: 767px) {
        .overview__chart {
            height: 206px;
        }
    }

    .overview__chart_snapshot {
        height: 329px;
        margin-left: -10px;
    }

    @media only screen and (max-width: 1023px) {
        .overview__chart_snapshot {
            height: 300px;
        }
    }

    .users__head {
        display: flex;
        align-items: center;
        margin-bottom: 24px;
    }

    @media only screen and (max-width: 767px) {
        .users__button {
            margin-left: 16px;
        }
    }

    .users__button span {
        margin-left: 4px;
    }

    @media only screen and (max-width: 767px) {
        .users__button span {
            display: none;
        }
    }

    .users__info {
        max-width: 240px;
        margin-right: auto;
        font-weight: 500;
        color: #6F767E;
    }

    .users__info strong {
        font-weight: 600;
        color: #1A1D1F;
    }

    body.dark .users__info strong {
        color: #FCFCFC;
    }

    .users__list {
        display: flex;
    }

    .users__item,
    .users__all {
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 32px 16px;
        flex: 0 0 25%;
        text-align: center;
        color: #1A1D1F;
        transition: color .2s;
    }

    @media only screen and (max-width: 767px) {

        .users__item,
        .users__all {
            flex: 0 0 33.333%;
            padding: 16px 8px;
        }
    }

    body.dark .users__item,
    body.dark .users__all {
        color: #FCFCFC;
    }

    .users__item:hover,
    .users__all:hover {
        color: #2A85FF;
    }

    .users__item {
        font-size: 13px;
        font-weight: 500;
        line-height: 1.23077;
    }

    @media only screen and (max-width: 639px) {
        .users__item:nth-child(n+3) {
            display: none;
        }
    }

    .users__all {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
    }

    .users__avatar,
    .users__icon {
        width: 64px;
        height: 64px;
        margin: 0 auto 12px;
    }

    .users__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    .users__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px solid #EFEFEF;
        border-radius: 50%;
        background: #EFEFEF;
        transition: all .2s;
    }

    .users__icon .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    body.dark .users__icon {
        background: #272B30;
        border-color: #272B30;
    }

    .users__all:hover .users__icon {
        border-color: #2A85FF;
        background: none;
    }

    .users__all:hover .users__icon .icon {
        fill: #2A85FF;
    }

    .tips__info {
        margin-bottom: 24px;
        font-weight: 500;
        color: #6F767E;
    }

    .tips__list {
        display: flex;
        flex-wrap: wrap;
        margin: -32px -16px 0;
    }

    @media only screen and (max-width: 767px) {
        .tips__list {
            display: block;
            margin: 0;
        }
    }

    .tips__item {
        display: flex;
        align-items: center;
        flex: 0 0 calc(50% - 32px);
        width: calc(50% - 32px);
        margin: 32px 16px 0;
        color: #1A1D1F;
        cursor: pointer;
    }

    @media only screen and (max-width: 767px) {
        .tips__item {
            width: 100%;
            margin: 0;
        }
    }

    body.dark .tips__item {
        color: #FCFCFC;
    }

    .tips__item:hover .tips__icon {
        background: #EFEFEF;
    }

    body.dark .tips__item:hover .tips__icon {
        background: #272B30;
    }

    @media only screen and (max-width: 767px) {
        .tips__item:not(:last-child) {
            margin-bottom: 24px;
        }
    }

    .tips__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 64px;
        height: 64px;
        border-radius: 50%;
        border: 2px solid #EFEFEF;
        margin-right: 12px;
        transition: background .2s;
    }

    .tips__icon .icon {
        width: 24px;
        height: 24px;
        fill: #272B30;
    }

    body.dark .tips__icon {
        border-color: #272B30;
    }

    body.dark .tips__icon .icon {
        fill: #FCFCFC;
    }

    .tips__details {
        flex-grow: 1;
    }

    .tips__title {
        margin-bottom: 8px;
    }

    .tips__line {
        display: flex;
        align-items: center;
    }

    .tips__status {
        margin-right: 4px;
        color: #1A1D1F;
    }

    .tips__user {
        display: inline-flex;
        align-items: center;
        padding: 1px 8px 1px 1px;
        border: 1px solid #EFEFEF;
        border-radius: 4px;
    }

    body.dark .tips__user {
        border-color: #272B30;
    }

    .tips__avatar {
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin-right: 4px;
        font-size: 0;
    }

    .tips__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 2px;
    }

    .tips__action {
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        color: #6F767E;
    }

    .media__content {
        margin-bottom: 16px;
        font-weight: 500;
        color: #6F767E;
    }

    .media__btns {
        display: flex;
        margin: 0 -8px;
    }

    @media only screen and (max-width: 767px) {
        .media__btns {
            margin: 0 -6px;
        }
    }

    .media__button {
        flex: 0 0 calc(33.333% - 16px);
        width: calc(33.333% - 16px);
        margin: 0 8px;
    }

    @media only screen and (max-width: 767px) {
        .media__button {
            flex: 0 0 calc(33.333% - 12px);
            width: calc(33.333% - 12px);
            margin: 0 6px;
            font-size: 0;
        }

        .media__button .icon {
            margin: 0 !important;
        }
    }

    .media__button .icon {
        width: 24px;
        height: 24px;
    }

    .popular__head {
        display: flex;
        justify-content: space-between;
        margin-bottom: 12px;
        padding-bottom: 24px;
        border-bottom: 1px solid #EFEFEF;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    body.dark .popular__head {
        border-color: #272B30;
    }

    .popular__list {
        margin: 0 -12px;
    }

    .popular__item {
        display: flex;
        align-items: center;
        padding: 12px;
        color: #1A1D1F;
        cursor: pointer;
    }

    body.dark .popular__item {
        color: #FCFCFC;
    }

    .popular__item:hover .popular__title {
        color: #2A85FF;
    }

    .popular__item:not(:last-child) {
        margin-bottom: 12px;
    }

    .popular__preview {
        flex-shrink: 0;
        width: 64px;
        height: 64px;
        margin-right: 12px;
        border-radius: 8px;
        overflow: hidden;
    }

    .popular__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .popular__title {
        flex-grow: 1;
        padding-right: 16px;
        transition: color .2s;
    }

    .popular__details {
        flex-shrink: 0;
        text-align: right;
    }

    .popular__button {
        width: 100%;
        margin-top: 12px;
    }

    .review__item {
        display: flex;
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .review__item {
        border-color: #272B30;
    }

    .review__avatar {
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        margin-right: 12px;
    }

    .review__avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .review__details {
        flex-grow: 1;
    }

    .review__line {
        display: flex;
        align-items: center;
    }

    .review__user {
        margin-right: auto;
    }

    .review__title {
        font-weight: 700;
    }

    .review__login {
        margin-left: 5px;
        font-weight: 500;
        color: #9A9FA5;
    }

    .review__time {
        margin-left: 20px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .review__product {
        margin-bottom: 8px;
        font-weight: 500;
        color: #9A9FA5;
    }

    .review__product strong {
        font-weight: 700;
        color: #1A1D1F;
    }

    body.dark .review__product strong {
        color: #FCFCFC;
    }

    .review__content {
        margin-bottom: 16px;
        font-weight: 500;
        color: #1A1D1F;
    }

    body.dark .review__content {
        color: #FCFCFC;
    }

    .review__control {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .review__link .icon {
        width: 20px;
        height: 20px;
        fill: #9A9FA5;
        transition: fill .2s;
    }

    .review__link:hover .icon {
        fill: #2A85FF;
    }

    .review__button {
        width: 100%;
    }

    .refund__item {
        display: flex;
    }

    .refund__item:not(:last-child) {
        margin-bottom: 12px;
    }

    .refund__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        margin-right: 12px;
        background: #FFE7E4;
    }

    .refund__icon .icon {
        width: 24px;
        height: 24px;
        fill: #FF6A55;
    }

    .refund__content {
        font-weight: 500;
        color: #6F767E;
    }

    .refund__content strong {
        font-weight: 600;
        color: #1A1D1F;
    }

    body.dark .refund__content strong {
        color: #FCFCFC;
    }

    .refund__button {
        width: 100%;
        margin-top: 24px;
    }

    .popup {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        min-width: 320px;
        padding: 20px 10px;
        visibility: hidden;
        opacity: 0;
        pointer-events: none;
        overflow: auto;
        z-index: 999;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .popup.visible {
        pointer-events: all;
        visibility: visible;
        opacity: 1;
    }

    .popup.animation .popup__wrap {
        opacity: 1;
    }

    .popup__overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(244, 244, 244, 0.8);
    }

    body.dark .popup__overlay {
        background: rgba(39, 43, 48, 0.9);
    }

    .popup__wrap {
        position: relative;
        z-index: 3;
        width: 100%;
        padding: 26px 24px 24px;
        margin: auto;
        opacity: 0;
        background: #FCFCFC;
        border-radius: 16px;
        box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.05), 0px 32px 48px -8px rgba(0, 0, 0, 0.1);
        transition: opacity .5s;
    }

    body.dark .popup__wrap {
        background: #1A1D1F;
    }

    @media only screen and (max-width: 767px) {
        .popup__wrap {
            box-shadow: none;
        }
    }

    .popup:not(.popup_product) .popup__wrap {
        max-width: 408px;
    }

    .popup__close {
        position: absolute;
        top: 24px;
        right: 24px;
        z-index: 2;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #EFEFEF;
        transition: background .2s;
    }

    .popup__close .icon {
        width: 20px;
        height: 20px;
        fill: #33383F;
        transition: -webkit-transform .25s;
        transition: transform .25s;
        transition: transform .25s, -webkit-transform .25s;
    }

    body.dark .popup__close {
        background: #272B30;
    }

    body.dark .popup__close .icon {
        fill: #FCFCFC;
    }

    .popup__close:hover .icon {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .popup_product {
        padding: 120px 24px 24px;
    }

    @media only screen and (max-width: 767px) {
        .popup_product {
            padding: 88px 16px 24px;
        }
    }

    .popup_product .popup__overlay {
        background: #F4F4F4;
    }

    body.dark .popup_product .popup__overlay {
        background: #111315;
    }

    .popup_product .popup__wrap {
        position: static;
        display: inline-block;
        width: auto;
        max-width: 100%;
        padding: 0;
        border-radius: 8px;
        z-index: 2;
        box-shadow: none;
    }

    @media only screen and (max-width: 1259px) {
        .popup_product .popup__wrap {
            background: none;
        }
    }

    .popup_post:not(.popup_product) .popup__wrap,
    .popup_success:not(.popup_product) .popup__wrap {
        max-width: 560px;
    }

    .popup_refunds:not(.popup_product) .popup__wrap {
        max-width: 896px;
    }

    @media only screen and (max-width: 767px) {
        .popup_refunds:not(.popup_product) .popup__wrap {
            padding: 28px 16px 16px;
        }
    }

    .product__wrapper {
        position: relative;
        width: 100%;
        max-width: 1020px;
        background: #FCFCFC;
        border-radius: 8px;
    }

    @media only screen and (max-width: 1259px) {
        .product__wrapper {
            max-width: calc(100% - 88px);
        }
    }

    @media only screen and (max-width: 767px) {
        .product__wrapper {
            max-width: 100%;
        }
    }

    body.dark .product__wrapper {
        background: #1A1D1F;
    }

    .product__details {
        padding: 24px;
        flex-grow: 1;
    }

    @media only screen and (max-width: 767px) {
        .product__details {
            padding: 16px;
            overflow: hidden;
        }
    }

    .product__comments {
        display: none;
        flex-shrink: 0;
        width: 472px;
    }

    @media only screen and (max-width: 1259px) {
        .product__comments {
            width: 600px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .product__comments {
            width: 100%;
        }
    }

    .product__next {
        position: absolute;
        left: calc(100% + 24px);
        bottom: 256px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 64px;
        height: 64px;
        background: #FFFFFF;
        border-radius: 50%;
    }

    @media only screen and (max-width: 1259px) {
        .product__next {
            left: auto;
            right: -88px;
            bottom: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .product__next {
            display: none;
        }
    }

    body.dark .product__next {
        background: #272B30;
    }

    .product__next .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .product__next:hover .icon {
        fill: #2A85FF;
    }

    .product__control {
        position: absolute;
        top: 24px;
        left: 24px;
        right: 24px;
        display: flex;
        align-items: center;
    }

    @media only screen and (max-width: 767px) {
        .product__control {
            top: 16px;
            left: 16px;
            right: 16px;
        }
    }

    body.dark .product__control .product__button {
        background: #1A1D1F;
        box-shadow: inset 0 0 0 2px #272B30;
        color: #FCFCFC;
    }

    body.dark .product__control .product__button:hover {
        background: #272B30;
    }

    .product__close {
        width: 36px;
        height: 36px;
        margin-left: auto;
        border-radius: 50%;
        background: #FFFFFF;
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.06);
        font-size: 0;
    }

    .product__close .icon {
        width: 20px;
        height: 20px;
        fill: #33383F;
        transition: -webkit-transform .2s;
        transition: transform .2s;
        transition: transform .2s, -webkit-transform .2s;
    }

    body.dark .product__close {
        background: #1A1D1F;
    }

    body.dark .product__close .icon {
        fill: #FCFCFC;
    }

    .product__close:hover .icon {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .product__head {
        display: flex;
        align-items: center;
        margin-bottom: 40px;
    }

    @media only screen and (max-width: 767px) {
        .product__head {
            flex-wrap: wrap;
            margin-bottom: 32px;
        }
    }

    .product__nav {
        display: flex;
        margin-right: auto;
    }

    @media only screen and (max-width: 767px) {
        .product__nav {
            width: 100%;
            margin: 0 0 16px;
        }
    }

    .product__link {
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    @media only screen and (max-width: 767px) {
        .product__link {
            flex: 1;
        }
    }

    .product__link:hover,
    .product__link.active {
        color: #1A1D1F;
    }

    body.dark .product__link:hover,
    body.dark .product__link.active {
        color: #FCFCFC;
    }

    .product__link.active {
        background: #EFEFEF;
    }

    body.dark .product__link.active {
        background: #272B30;
    }

    .product__link:not(:last-child) {
        margin-right: 8px;
    }

    @media only screen and (max-width: 767px) {
        .product__link:not(:last-child) {
            margin-right: 0;
        }
    }

    .product__btns {
        display: flex;
        align-items: center;
    }

    .product__favorite {
        margin-right: 16px;
    }

    .product__favorite .icon {
        width: 24px;
        height: 24px;
        fill: #FF6A55;
    }

    .product__favorite:hover {
        box-shadow: inset 0 0 0 1px #FF6A55;
        background: #FF6A55;
        color: #FCFCFC;
    }

    body.dark .product__favorite:hover {
        box-shadow: inset 0 0 0 1px #FF6A55;
    }

    .product__favorite:hover .icon {
        fill: #FCFCFC;
    }

    @media only screen and (max-width: 1023px) {
        .product__buy {
            padding: 0 16px;
        }
    }

    @media only screen and (max-width: 767px) {
        .product__buy {
            flex-grow: 1;
        }
    }

    .product__buy .icon {
        width: 24px;
        height: 24px;
    }

    .product__inner {
        display: inline-flex;
        align-items: center;
    }

    .product__inner span {
        margin-left: 4px;
    }

    @media only screen and (max-width: 1023px) {
        .product__inner span {
            display: none;
        }
    }

    .product__price {
        margin-right: 20px;
        padding-right: 20px;
        border-right: 1px solid #4493FC;
        box-shadow: 1px 0 0 0 #186FE3;
        line-height: 48px;
    }

    @media only screen and (max-width: 1023px) {
        .product__price {
            margin-right: 16px;
            padding-right: 16px;
        }
    }

    @media only screen and (max-width: 767px) {
        .product__price {
            margin-right: 12px;
            padding-right: 12px;
        }
    }

    .product__title {
        margin-bottom: 12px;
    }

    @media only screen and (max-width: 767px) {
        .product__title {
            font-size: 24px;
        }
    }

    .product__info {
        margin-bottom: 12px;
        font-size: 20px;
        font-weight: 500;
        line-height: 1.6;
        letter-spacing: -.02em;
        color: #6F767E;
    }

    @media only screen and (max-width: 767px) {
        .product__info {
            font-size: 18px;
        }
    }

    @media only screen and (max-width: 767px) {
        .product__info {
            font-size: 14px;
        }
    }

    .product__line {
        display: flex;
        align-items: center;
    }

    .product__author {
        display: flex;
        align-items: center;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #6F767E;
    }

    .product__author span {
        margin-left: 4px;
        color: #1A1D1F;
    }

    body.dark .product__author span {
        color: #FCFCFC;
    }

    .product__author .product__avatar {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        margin-right: 12px;
    }

    .product__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    .product__rating {
        display: flex;
        align-items: center;
        margin-left: 12px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    .product__rating .icon {
        width: 24px;
        height: 24px;
        margin-right: 8px;
        fill: #FFC554;
    }

    .product__counter {
        margin-left: 4px;
        color: #6F767E;
    }

    .product__gallery {
        position: relative;
        margin-top: 40px;
    }

    @media only screen and (max-width: 767px) {
        .product__gallery {
            margin-top: 32px;
        }
    }

    .product__gallery .product__button {
        position: absolute;
        left: 12px;
        bottom: 12px;
        pointer-events: none;
    }

    @media only screen and (max-width: 767px) {
        .product__gallery .product__button {
            bottom: 5px;
        }
    }

    body.dark .product__gallery .product__button {
        box-shadow: inset 0 0 0 2px #272B30;
        background: #1A1D1F;
        color: #FCFCFC;
    }

    body.dark .product__gallery .product__button:hover {
        background: #272B30;
    }

    .product__preview {
        display: block;
        cursor: pointer;
    }

    .product__preview img {
        width: 100%;
        border-radius: 12px;
    }

    .product__preview:not(:first-child) {
        display: none;
    }

    .product__row {
        display: flex;
        margin-top: 40px;
    }

    @media only screen and (max-width: 1023px) {
        .product__row {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .product__row {
            margin-top: 32px;
        }
    }

    .product__col:first-child {
        flex-grow: 1;
        padding-right: 64px;
    }

    @media only screen and (max-width: 1259px) {
        .product__col:first-child {
            padding-right: 48px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .product__col:first-child {
            padding-right: 0;
        }
    }

    .product__col:nth-child(2) {
        flex-shrink: 0;
        width: 308px;
    }

    @media only screen and (max-width: 1023px) {
        .product__col:nth-child(2) {
            width: 100%;
            margin-top: 32px;
        }
    }

    .product__subtitle {
        margin-bottom: 32px;
    }

    @media only screen and (max-width: 1023px) {
        .product__subtitle {
            margin-bottom: 24px;
        }
    }

    @media only screen and (max-width: 767px) {
        .product__subtitle {
            margin-bottom: 12px;
        }
    }

    .product__content {
        font-weight: 500;
        color: #33383F;
    }

    body.dark .product__content {
        color: #EFEFEF;
    }

    .product__content p:not(:last-child) {
        margin-bottom: 16px;
    }

    @media only screen and (max-width: 767px) {
        .product__features {
            margin-top: 12px;
        }
    }

    .product__features li {
        position: relative;
        padding-left: 40px;
        color: #33383F;
    }

    body.dark .product__features li {
        color: #EFEFEF;
    }

    .product__features li:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 24px;
        height: 24px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'%3E%3Cpath fill-rule='evenodd' d='M20.707 6.293a1 1 0 0 1 0 1.414l-8.586 8.586a3 3 0 0 1-4.243 0l-3.586-3.586a1 1 0 0 1 1.414-1.414l3.586 3.586a1 1 0 0 0 1.414 0l8.586-8.586a1 1 0 0 1 1.414 0z' fill='%23b5e4ca'/%3E%3C/svg%3E") no-repeat 50% 50%/100% auto;
    }

    .product__features li:not(:last-child) {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .product__features li:not(:last-child) {
            margin-bottom: 16px;
            padding-bottom: 16px;
        }
    }

    body.dark .product__features li:not(:last-child) {
        border-color: #272B30;
    }

    .product__panel {
        position: absolute;
        top: 16px;
        left: calc(100% + 24px);
        display: flex;
        flex-direction: column;
    }

    @media only screen and (max-width: 1259px) {
        .product__panel {
            top: 0;
            left: auto;
            right: -88px;
        }
    }

    @media only screen and (max-width: 767px) {
        .product__panel {
            display: none;
        }
    }

    .product__panel .product__avatar:not(:last-child),
    .product__brand:not(:last-child),
    .product__share:not(:last-child) {
        margin-bottom: 24px;
    }

    .product__panel .product__avatar,
    .product__brand,
    .product__share {
        flex-shrink: 0;
        width: 64px;
        height: 64px;
    }

    .product__brand {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        background: #FFFFFF;
    }

    body.dark .product__brand {
        background: #272B30;
    }

    .product__brand img {
        max-height: 32px;
    }

    .product__number {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 20px;
        padding: 0 4px;
        background: #1A1D1F;
        border-radius: 50%;
        text-align: center;
        font-size: 14px;
        line-height: 20px;
        color: #FCFCFC;
    }

    body.dark .product__number {
        background: #FCFCFC;
        color: #1A1D1F;
    }

    .product__share {
        background: #FFFFFF;
        border-radius: 50%;
    }

    body.dark .product__share {
        background: #272B30;
    }

    .product__share .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .product__share:hover .icon {
        fill: #2A85FF;
    }

    .product.active .product__wrapper {
        display: flex;
        max-width: 1440px;
    }

    @media only screen and (max-width: 1259px) {
        .product.active .product__wrapper {
            max-width: 100%;
            margin-right: 0;
        }
    }

    .product.active .product__details {
        flex: 0 0 calc(100% - 472px);
        width: calc(100% - 472px);
    }

    @media only screen and (max-width: 1259px) {
        .product.active .product__details {
            display: none;
        }
    }

    .product.active .product__comments {
        display: block;
    }

    .product.active .product__panel,
    .product.active .product__next {
        display: none;
    }

    .hit {
        margin-top: 64px;
        padding-top: 64px;
        border-top: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 1023px) {
        .hit {
            margin-top: 48px;
            padding-top: 48px;
        }
    }

    @media only screen and (max-width: 767px) {
        .hit {
            margin-top: 32px;
            padding-top: 32px;
        }
    }

    body.dark .hit {
        border-color: #272B30;
    }

    .hit__head {
        display: flex;
        align-items: center;
        margin-bottom: 32px;
    }

    .hit__title {
        margin-right: auto;
    }

    .hit__button .icon {
        width: 24px;
        height: 24px;
    }

    .hit__wrapper {
        margin: 0 -12px;
    }

    @media only screen and (max-width: 767px) {
        .hit__wrapper {
            margin: 0;
        }
    }

    .hit .summary {
        margin: 0 12px;
    }

    .hit__slider {
        padding-bottom: 48px;
    }

    @media only screen and (max-width: 767px) {
        .hit .slick-list {
            margin: 0 -296px 0 -8px;
        }
    }

    .hit .slick-arrow {
        bottom: 0;
    }

    body.dark .hit .slick-arrow:hover {
        box-shadow: inset 0 0 0 2px #272B30;
    }

    body.dark .hit .slick-arrow:hover path {
        fill: #FCFCFC;
    }

    .hit .slick-prev {
        left: calc(50% - 48px);
    }

    .hit .slick-next {
        right: calc(50% - 48px);
    }

    .summary__preview:after,
    .summary__control,
    .summary .checkbox {
        opacity: 0;
        visibility: hidden;
        transition: all .2s;
    }

    .summary__preview {
        position: relative;
        height: 200px;
        margin-bottom: 16px;
        border-radius: 12px;
        overflow: hidden;
    }

    .summary__preview:after,
    .summary__preview:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all .2s;
    }

    .summary__preview:after {
        background: rgba(17, 19, 21, 0.8);
    }

    .summary__preview:before {
        z-index: 2;
        border: 2px solid transparent;
        border-radius: 12px;
        pointer-events: none;
    }

    .summary__preview img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .summary__preview .checkbox {
        position: absolute;
        top: 12px;
        left: 12px;
        z-index: 3;
    }

    @media only screen and (max-width: 1023px) {
        .summary__preview .checkbox {
            display: none;
        }
    }

    .summary__preview .checkbox .checkbox__tick {
        border-color: #2A85FF;
    }

    .summary__control {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 3;
        display: flex;
        align-items: center;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .summary__button {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #FCFCFC;
    }

    .summary__button .icon {
        width: 20px;
        height: 20px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .summary__button:hover .icon {
        fill: #2A85FF;
    }

    .summary__button:not(:last-child) {
        margin-right: 16px;
    }

    .summary__line {
        display: flex;
        align-items: flex-start;
    }

    .summary__title {
        margin-right: auto;
    }

    .summary__price,
    .summary__empty {
        flex-shrink: 0;
        display: inline-block;
        margin-left: 32px;
        padding: 0 8px;
        border-radius: 6px;
        line-height: 32px;
        font-weight: 700;
    }

    .summary__price {
        background: #B5E4CA;
    }

    body.dark .summary__price {
        color: #1A1D1F;
    }

    .summary__empty {
        background: #EFEFEF;
    }

    body.dark .summary__empty {
        background: #272B30;
        color: #FCFCFC;
    }

    .summary__date {
        display: flex;
        align-items: center;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #6F767E;
    }

    @media only screen and (max-width: 767px) {
        .summary__date {
            margin-top: 2px;
        }
    }

    .summary__date .icon {
        width: 24px;
        height: 24px;
        margin-right: 8px;
        fill: #6F767E;
    }

    .summary__rating {
        display: flex;
        align-items: center;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    @media only screen and (max-width: 767px) {
        .summary__rating {
            margin-top: 4px;
        }
    }

    .summary__rating .icon {
        width: 24px;
        height: 24px;
        margin-right: 8px;
        fill: #FFC554;
    }

    .summary__rating_empty {
        color: #6F767E;
    }

    .summary__rating_empty .icon {
        fill: #6F767E;
    }

    .summary__counter {
        margin-left: 4px;
        color: #6F767E;
    }

    .summary:hover .summary__preview:after,
    .summary:hover .summary__control,
    .summary:hover .checkbox {
        visibility: visible;
        opacity: 1;
    }

    .summary.active .checkbox {
        visibility: visible;
        opacity: 1;
    }

    .summary.active .summary__preview:before {
        border-color: #2A85FF;
    }

    .editor__label {
        margin-bottom: 14px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #33383F;
        display: none;
    }

    body.dark .editor__label {
        color: #EFEFEF;
    }

    .editor .tooltip {
        position: relative;
        top: -1px;
    }

    .editor .tooltip .icon {
        fill: #9A9FA5;
    }

    .editor .richText {
        background: #F4F4F4;
        border: 2px solid rgba(154, 159, 165, 0.25);
        border-radius: 12px;
    }

    body.dark .editor .richText {
        background: #111315;
        border-color: rgba(154, 159, 165, 0.15);
    }

    .editor .richText-toolbar {
        border: none;
        padding: 0 3px;
    }

    .editor .richText-toolbar ul li {
        margin: 6px;
    }

    @media only screen and (max-width: 767px) {
        .editor .richText-toolbar ul li {
            margin: 3px;
        }
    }

    .editor .richText-toolbar ul li a {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        padding: 0;
        border: none;
        background: none !important;
        transition: color .2s;
    }

    .editor .richText-toolbar ul li a:hover {
        color: #2A85FF;
    }

    body.dark .editor .richText-toolbar ul li a {
        color: #9A9FA5;
    }

    body.dark .editor .richText-toolbar ul li a:hover {
        color: #FCFCFC;
    }

    .editor .richText-toolbar:first-child {
        padding-right: 100px;
        background: #FCFCFC;
        border-radius: 10px 10px 0 0;
    }

    body.dark .editor .richText-toolbar:first-child {
        background: #272B30;
    }

    @media only screen and (max-width: 767px) {
        .editor .richText-toolbar:first-child {
            padding-right: 85px;
        }
    }

    .editor .richText-toolbar:last-child {
        position: absolute;
        top: 0;
        right: 0;
        font-size: 16px;
    }

    .editor .richText-undo,
    .editor .richText-redo {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        margin: 6px;
        padding: 0;
        border: none;
        transition: color .2s;
    }

    @media only screen and (max-width: 767px) {

        .editor .richText-undo,
        .editor .richText-redo {
            margin: 3px;
        }
    }

    body.dark .editor .richText-undo,
    body.dark .editor .richText-redo {
        color: #9A9FA5;
    }

    .editor .richText-undo:not(.is-disabled):hover,
    .editor .richText-redo:not(.is-disabled):hover {
        color: #2A85FF;
    }

    body.dark .editor .richText-undo:not(.is-disabled):hover,
    body.dark .editor .richText-redo:not(.is-disabled):hover {
        color: #FCFCFC;
    }

    .editor .richText-help {
        display: none;
    }

    .editor .richText-editor {
        min-height: 122px;
        max-height: 200px;
        height: auto;
        padding: 12px;
        border: none !important;
        background: none;
        border-radius: 0 0 10px 10px;
        font-family: 'Inter', sans-serif;
        color: #33383F;
    }

    body.dark .editor .richText-editor {
        color: #FCFCFC;
    }

    .editor .richText-dropdown {
        z-index: 2;
    }

    .editor__wrap {
        position: relative;
    }

    .editor__wrap .richText {
        padding-bottom: 60px;
    }

    .editor__wrap .richText-editor {
        min-height: 60px;
    }

    .editor__button {
        position: absolute;
        left: 12px;
        bottom: 12px;
        z-index: 1;
    }

    .answer {
        display: none;
        position: relative;
        margin-top: 28px;
        padding-left: 60px;
    }

    @media only screen and (max-width: 767px) {
        .answer {
            padding-left: 52px;
        }
    }

    .answer:before {
        content: "";
        position: absolute;
        top: -23px;
        left: -45px;
        width: 33px;
        height: 44px;
        border-bottom-left-radius: 12px;
        border-width: 0 0 2px 2px;
        border-style: solid;
        border-color: #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .answer:before {
            left: -37px;
        }
    }

    body.dark .answer:before {
        border-color: #33383F;
    }

    .answer__avatar {
        position: absolute;
        top: 0;
        left: 0;
        width: 40px;
        height: 40px;
    }

    .answer__avatar>img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .answer__details {
        flex-grow: 1;
    }

    .answer__details textarea {
        display: block;
        overflow: hidden;
        width: 100%;
        max-width: 360px;
        height: 19px;
        min-height: 19px;
        padding: 0;
        resize: none;
        background: none;
        border: none;
        font-size: 15px;
        font-weight: 600;
        color: #272B30;
    }

    @media only screen and (max-width: 767px) {
        .answer__details textarea {
            padding-right: 8px;
        }
    }

    body.dark .answer__details textarea {
        color: #FCFCFC;
    }

    .answer__details textarea::-webkit-input-placeholder {
        color: rgba(17, 19, 21, 0.5);
    }

    .answer__details textarea::-moz-placeholder {
        color: rgba(17, 19, 21, 0.5);
    }

    .answer__details textarea:-ms-input-placeholder {
        color: rgba(17, 19, 21, 0.5);
    }

    .answer__details textarea::-ms-input-placeholder {
        color: rgba(17, 19, 21, 0.5);
    }

    .answer__details textarea::placeholder {
        color: rgba(17, 19, 21, 0.5);
    }

    body.dark .answer__details textarea::-webkit-input-placeholder {
        color: #6F767E;
    }

    body.dark .answer__details textarea::-moz-placeholder {
        color: #6F767E;
    }

    body.dark .answer__details textarea:-ms-input-placeholder {
        color: #6F767E;
    }

    body.dark .answer__details textarea::-ms-input-placeholder {
        color: #6F767E;
    }

    body.dark .answer__details textarea::placeholder {
        color: #6F767E;
    }

    .answer__btns {
        display: flex;
        margin-top: 16px;
    }

    body.dark .answer__button:nth-child(2) {
        background: #1A1D1F;
        box-shadow: inset 0 0 0 2px #1A1D1F;
    }

    body.dark .answer__button:nth-child(2):hover {
        background: #111315;
        box-shadow: inset 0 0 0 2px #111315;
    }

    .answer__button:not(:last-child) {
        margin-right: 8px;
    }

    .comments {
        padding: 24px;
        border-left: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .comments {
            padding: 16px 16px 24px;
        }
    }

    body.dark .comments {
        border-color: #111315;
    }

    .comments__head {
        display: flex;
        align-items: center;
        height: 48px;
    }

    .comments__title {
        display: flex;
        align-items: center;
        margin-right: auto;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .comments__title {
            font-size: 18px;
        }
    }

    .comments__counter {
        flex-shrink: 0;
        min-width: 38px;
        margin-right: 12px;
        padding: 0 6px;
        border-radius: 8px;
        background: #CABDFF;
        text-align: center;
        line-height: 36px;
    }

    body.dark .comments__counter {
        color: #1A1D1F;
    }

    .comments__close {
        flex-shrink: 0;
        width: 36px;
        height: 36px;
    }

    .comments__close .icon {
        width: 20px;
        height: 20px;
        fill: #33383F;
        transition: fill .2s;
    }

    body.dark .comments__close .icon {
        fill: #FCFCFC;
    }

    .comments__close:hover .icon {
        fill: #2A85FF;
    }

    .comments .editor {
        margin-top: 24px;
    }

    .comments__list {
        margin-top: 40px;
    }

    @media only screen and (max-width: 767px) {
        .comments__list {
            margin-top: 24px;
        }
    }

    .comments__item,
    .comments__answer {
        display: flex;
    }

    .comments__item .comments__avatar {
        width: 48px;
        height: 48px;
    }

    .comments__item .comments__details {
        flex: 0 0 calc(100% - 48px);
        width: calc(100% - 48px);
        padding-left: 16px;
    }

    .comments__item:not(:first-child) {
        margin-top: 32px;
        padding-top: 24px;
        border-top: 1px solid #EFEFEF;
    }

    body.dark .comments__item:not(:first-child) {
        border-color: #272B30;
    }

    .comments__answer {
        margin-top: 32px;
        padding: 24px 0 0 64px;
        border-top: 1px solid #EFEFEF;
    }

    body.dark .comments__answer {
        border-color: #272B30;
    }

    .comments__answer .comments__avatar {
        width: 32px;
        height: 32px;
    }

    .comments__answer .comments__details {
        flex: 0 0 calc(100% - 32px);
        width: calc(100% - 32px);
        padding-left: 16px;
    }

    .comments__avatar {
        flex-shrink: 0;
    }

    .comments__avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .comments__line {
        display: flex;
        align-items: center;
    }

    .comments__author {
        margin-right: auto;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .comments__time {
        margin-left: 8px;
        white-space: nowrap;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #9A9FA5;
    }

    .comments__rating {
        display: flex;
        align-items: center;
        margin-left: 16px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    .comments__rating .icon {
        width: 24px;
        height: 24px;
        margin-left: 8px;
        fill: #FFC554;
    }

    .comments__login {
        margin-top: 4px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        font-weight: 500;
        color: #6F767E;
    }

    .comments__content {
        margin-top: 12px;
        font-weight: 500;
        color: #33383F;
    }

    body.dark .comments__content {
        color: #FCFCFC;
    }

    .comments__content strong {
        font-weight: 600;
    }

    .comments__control {
        display: flex;
        align-items: center;
        margin-top: 20px;
    }

    .comments__favorite,
    .comments__reply {
        display: flex;
        align-items: center;
        font-size: 13px;
        font-weight: 700;
        line-height: 1.23077;
        color: #9A9FA5;
        transition: color .2s;
    }

    .comments__favorite .icon,
    .comments__reply .icon {
        width: 20px;
        height: 20px;
        margin-right: 10px;
        fill: #9A9FA5;
        transition: fill .2s;
    }

    .comments__favorite:hover,
    .comments__favorite.active,
    .comments__reply:hover,
    .comments__reply.active {
        color: #1A1D1F;
    }

    .comments__favorite:hover .icon,
    .comments__favorite.active .icon,
    .comments__reply:hover .icon,
    .comments__reply.active .icon {
        fill: #1A1D1F;
    }

    body.dark .comments__favorite:hover,
    body.dark .comments__favorite.active,
    body.dark .comments__reply:hover,
    body.dark .comments__reply.active {
        color: #FCFCFC;
    }

    body.dark .comments__favorite:hover .icon,
    body.dark .comments__favorite.active .icon,
    body.dark .comments__reply:hover .icon,
    body.dark .comments__reply.active .icon {
        fill: #FCFCFC;
    }

    .comments__favorite:not(:last-child),
    .comments__reply:not(:last-child) {
        margin-right: 24px;
    }

    .comments__favorite .icon:nth-child(2) {
        display: none;
    }

    .comments__favorite.active .icon:first-child {
        display: none;
    }

    .comments__favorite.active .icon:nth-child(2) {
        display: inline-block;
    }

    .share__head,
    .share__preview {
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .share__head,
    body.dark .share__preview {
        border-color: #272B30;
    }

    .share__head {
        padding-right: 50px;
    }

    .share__title {
        position: 40px;
    }

    .share__field {
        position: relative;
        margin-bottom: 24px;
    }

    .share__icon {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        pointer-events: none;
    }

    .share__icon .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
    }

    .share__input {
        width: 100%;
        height: 40px;
        padding: 0 60px 0 44px;
        border-radius: 8px;
        background: #F4F4F4;
        font-size: 15px;
        font-weight: 600;
        color: #9A9FA5;
    }

    body.dark .share__input {
        background: #272B30;
    }

    .share__copy {
        position: absolute;
        top: 0;
        right: 8px;
        bottom: 0;
        font-size: 15px;
        font-weight: 600;
        line-height: 40px;
        color: #2A85FF;
        transition: opacity .2s;
    }

    .share__copy:hover {
        opacity: .8;
    }

    .share__preview img {
        width: 100%;
        border-radius: 12px;
    }

    .share__btns {
        display: flex;
        margin: 0 -8px;
    }

    .share__button {
        flex-grow: 1;
        margin: 0 8px;
    }

    .share__button .icon {
        width: 24px;
        height: 24px;
    }

    .stock__list {
        display: flex;
        margin: 0 -6px;
    }

    @media only screen and (max-width: 1023px) {
        .stock__list {
            margin: 0 -24px;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .stock__list::-webkit-scrollbar {
            display: none;
        }

        .stock__list:before,
        .stock__list:after {
            content: "";
            flex-shrink: 0;
            width: 24px;
            height: 1px;
        }
    }

    @media only screen and (max-width: 767px) {
        .stock__list {
            margin: 0 -16px;
        }

        .stock__list:before,
        .stock__list:after {
            width: 16px;
        }
    }

    .stock__item {
        display: block;
        flex: 0 0 calc(33.333% - 12px);
        width: calc(33.333% - 12px);
        margin: 0 6px;
        padding: 32px;
        border-radius: 12px;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 1023px) {
        .stock__item {
            flex: 0 0 295px;
            width: 295px;
            margin: 0;
        }

        .stock__item:not(:last-child) {
            margin-right: 12px;
        }
    }

    @media only screen and (max-width: 767px) {
        .stock__item {
            flex: 0 0 285px;
            width: 285px;
        }
    }

    body.dark .stock__item {
        color: #EFEFEF;
    }

    body.dark .stock__item:nth-child(2n+1) {
        background: rgba(167, 170, 247, 0.15) !important;
    }

    body.dark .stock__item:nth-child(2n) {
        background: rgba(177, 229, 252, 0.1) !important;
    }

    .stock__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 48px;
        height: 48px;
        margin-bottom: 12px;
        border-radius: 50%;
        background: #1A1D1F;
    }

    .stock__icon .icon {
        width: 24px;
        height: 24px;
        fill: #FCFCFC;
    }

    body.dark .stock__icon {
        background: #FCFCFC;
    }

    body.dark .stock__icon .icon {
        fill: #1A1D1F;
    }

    .stock__line {
        display: flex;
    }

    .stock__category {
        display: flex;
        align-items: center;
        margin-bottom: 4px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #33383F;
    }

    body.dark .stock__category {
        color: #EFEFEF;
    }

    .stock .tooltip .icon {
        fill: #33383F;
    }

    body.dark .stock .tooltip .icon {
        fill: #EFEFEF;
    }

    .stock__counter {
        margin-bottom: 4px;
        font-size: 48px;
        font-weight: 600;
        line-height: 1;
        letter-spacing: -.03em;
    }

    .stock__indicator {
        display: inline-flex;
        align-items: center;
        border-radius: 8px;
        padding: 4px;
        background: #FCFCFC;
        color: #6F767E;
    }

    body.dark .stock__indicator {
        background: #1A1D1F;
    }

    .stock__indicator span {
        margin-left: 4px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
    }

    .stock__chart {
        width: 80px;
        height: 80px;
        margin-left: auto;
    }

    .activity__table {
        display: table;
        width: 100%;
    }

    @media only screen and (max-width: 767px) {
        .activity__table {
            display: block;
        }
    }

    .activity__row {
        display: table-row;
    }

    @media only screen and (max-width: 767px) {
        .activity__row {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .activity__row:first-child {
            display: none;
        }
    }

    .activity__row:first-child .activity__col {
        padding-bottom: 24px;
        border-bottom: 1px solid #EFEFEF;
        white-space: nowrap;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    body.dark .activity__row:first-child .activity__col {
        border-color: #272B30;
    }

    .activity__row:not(:first-child) .activity__col {
        padding-top: 24px;
    }

    @media only screen and (max-width: 767px) {
        .activity__row:not(:first-child) .activity__col {
            padding: 0;
        }
    }

    .activity__row:not(:first-child) .activity__col:first-child {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #6F767E;
    }

    @media only screen and (max-width: 1419px) {
        .activity__row:not(:first-child) .activity__col:first-child {
            font-size: 12px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .activity__row:not(:first-child) .activity__col:first-child {
            font-size: 14px;
        }
    }

    .activity__row:nth-child(2) .activity__col {
        padding-top: 32px;
    }

    @media only screen and (max-width: 767px) {
        .activity__row:nth-child(2) .activity__col {
            padding-top: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .activity__row:not(:last-child):not(:first-child) {
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .activity__row:not(:last-child):not(:first-child) {
            border-color: #272B30;
        }
    }

    .activity__row:not(:last-child):not(:first-child) .activity__col {
        padding-bottom: 16px;
        border-bottom: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .activity__row:not(:last-child):not(:first-child) .activity__col {
            padding-bottom: 0;
            border: none;
        }
    }

    body.dark .activity__row:not(:last-child):not(:first-child) .activity__col {
        border-color: #272B30;
    }

    .activity__col {
        display: table-cell;
        vertical-align: middle;
    }

    @media only screen and (max-width: 767px) {
        .activity__col {
            display: flex;
            align-items: center;
        }
    }

    .activity__col:not(:last-child) {
        padding-right: 16px;
    }

    @media only screen and (max-width: 767px) {
        .activity__col:not(:last-child) {
            margin-bottom: 8px;
            padding-right: 0;
        }
    }

    .activity__label {
        display: none;
    }

    @media only screen and (max-width: 767px) {
        .activity__label {
            display: block;
            flex-shrink: 0;
            width: 116px;
            padding-right: 12px;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.23077;
            color: #6F767E;
        }
    }

    .activity__item {
        display: inline-flex;
        align-items: center;
    }

    .activity__counter {
        padding: 0 6px;
        border-radius: 6px;
        cursor: pointer;
    }

    body.dark .activity__counter {
        color: #1A1D1F;
    }

    .activity__counter:hover+.balance {
        visibility: visible;
        opacity: 1;
    }

    .activity .balance {
        margin-left: 6px;
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    @media only screen and (max-width: 1259px) {
        .activity .balance {
            visibility: visible;
            opacity: 1;
            font-size: 11px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .activity .balance {
            font-size: 12px;
        }
    }

    .activity__nav {
        display: none;
        margin-top: 32px;
    }

    @media only screen and (max-width: 767px) {
        .activity__nav {
            display: flex;
        }
    }

    .activity__link {
        flex: 1;
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    .activity__link:hover,
    .activity__link.active {
        color: #1A1D1F;
    }

    body.dark .activity__link:hover,
    body.dark .activity__link.active {
        color: #FCFCFC;
    }

    .activity__link.active {
        background: #EFEFEF;
    }

    body.dark .activity__link.active {
        background: #272B30;
    }

    .form {
        position: relative;
        width: 360px;
    }

    .form__input {
        width: 100%;
        height: 40px;
        padding: 0 20px 0 44px;
        background: #F4F4F4;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #1A1D1F;
    }

    body.dark .form__input {
        background: #272B30;
        color: #FCFCFC;
    }

    .form__input::-webkit-input-placeholder {
        color: #9A9FA5;
    }

    .form__input::-moz-placeholder {
        color: #9A9FA5;
    }

    .form__input:-ms-input-placeholder {
        color: #9A9FA5;
    }

    .form__input::-ms-input-placeholder {
        color: #9A9FA5;
    }

    .form__input::placeholder {
        color: #9A9FA5;
    }

    .form__button {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 44px;
        padding-right: 4px;
    }

    .form__button .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .form__button:hover .icon {
        fill: #2A85FF;
    }

    .checkbox {
        display: block;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .checkbox__input {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .checkbox__inner {
        display: flex;
    }

    .checkbox__inner:hover .checkbox__tick {
        border-color: #2A85FF;
    }

    .checkbox__tick {
        position: relative;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        border-radius: 6px;
        border: 2px solid rgba(111, 118, 126, 0.4);
        transition: all .2s;
    }

    .checkbox__tick:before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 17px;
        height: 12px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='17' height='12' viewBox='0 0 17 12'%3E%3Cpath d='M16.707.293a1 1 0 0 1 0 1.414l-8.586 8.586a3 3 0 0 1-4.243 0L.293 6.707A1 1 0 0 1 .735 5.02a1 1 0 0 1 .973.273l3.586 3.586a1 1 0 0 0 1.414 0L15.293.293a1 1 0 0 1 1.414 0z' fill='%23fcfcfc' fill-rule='evenodd'/%3E%3C/svg%3E") no-repeat 50% 50%/100% auto;
        opacity: 0;
        transition: opacity .2s;
    }

    .checkbox__text {
        flex-grow: 1;
        padding-left: 16px;
        font-size: 15px;
        line-height: 1.71429;
        font-weight: 600;
        color: #1A1D1F;
    }

    body.dark .checkbox__text {
        color: #FCFCFC;
    }

    .checkbox__input:checked+.checkbox__inner .checkbox__tick {
        background: #2A85FF;
        border-color: #2A85FF;
    }

    .checkbox__input:checked+.checkbox__inner .checkbox__tick:before {
        opacity: 1;
    }

    .checkbox_reverse .checkbox__inner {
        flex-direction: row-reverse;
    }

    .checkbox_reverse .checkbox__text {
        padding: 0 16px 0 0;
    }

    .radio {
        display: block;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .radio__input {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .radio__inner {
        display: flex;
    }

    .radio__inner:hover .radio__tick {
        border-color: #2A85FF;
    }

    .radio__tick {
        position: relative;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        border: 2px solid rgba(111, 118, 126, 0.4);
        transition: all .2s;
    }

    .radio__tick:before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) scale(0);
        transform: translate(-50%, -50%) scale(0);
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #FCFCFC;
        box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.25), inset 0px -1px 2px #DEDEDE;
        transition: -webkit-transform .2s;
        transition: transform .2s;
        transition: transform .2s, -webkit-transform .2s;
    }

    .radio__text {
        flex-grow: 1;
        padding-right: 16px;
        line-height: 1.71429;
        color: #1A1D1F;
    }

    body.dark .radio__text {
        color: #FCFCFC;
    }

    .radio__input:checked+.radio__inner .radio__tick {
        background: #2A85FF;
        border-color: #2A85FF;
    }

    .radio__input:checked+.radio__inner .radio__tick:before {
        -webkit-transform: translate(-50%, -50%) scale(1);
        transform: translate(-50%, -50%) scale(1);
    }

    .control {
        display: flex;
        align-items: center;
    }

    .control__button {
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        margin-right: 24px;
        border-radius: 50%;
        background: #FCFCFC;
    }

    @media only screen and (max-width: 1023px) {
        .control__button {
            display: none;
        }
    }

    body.dark .control__button {
        background: #1A1D1F;
    }

    .control__button .icon {
        width: 20px;
        height: 20px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .control__button:hover .icon {
        fill: #2A85FF;
    }

    .control .actions__button {
        width: 36px;
        height: 36px;
        background: #FCFCFC;
    }

    body.dark .control .actions__button {
        background: #1A1D1F;
    }

    .control .actions__button:hover .icon {
        fill: #2A85FF;
    }

    .control .actions__button .icon {
        fill: #6F767E;
    }

    .control .actions.active .actions__button {
        background: #FCFCFC;
    }

    body.dark .control .actions.active .actions__button {
        background: #1A1D1F;
    }

    .control .actions__body:before {
        right: 19px;
    }

    body.dark .control .actions__body:before {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='10' fill='none' viewBox='0 0 20 10'%3E%3Cpath d='M6.927 1.687L0 10h20l-6.927-8.313a4 4 0 0 0-6.146 0z' fill='%23111315'/%3E%3C/svg%3E");
    }

    .control .actions__option:first-child,
    .control .actions__option:nth-child(2) {
        display: none;
    }

    @media only screen and (max-width: 1023px) {

        .control .actions__option:first-child,
        .control .actions__option:nth-child(2) {
            display: flex;
        }
    }

    .products__head {
        display: flex;
        align-items: center;
        margin-bottom: 44px;
    }

    @media only screen and (max-width: 1023px) {
        .products__head {
            margin-bottom: 32px;
        }
    }

    @media only screen and (max-width: 767px) {
        .products__head {
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
    }

    @media only screen and (max-width: 1419px) {
        .products__head .form {
            width: 300px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .products__head .form {
            width: 250px;
        }
    }

    @media only screen and (max-width: 767px) {
        .products__head .form {
            width: 100%;
            margin: 16px 0 0;
        }
    }

    .products__title {
        margin-right: 24px;
    }

    @media only screen and (max-width: 767px) {
        .products__title {
            margin-right: 0;
        }
    }

    .products__indicators {
        display: none;
        align-items: center;
    }

    @media only screen and (max-width: 1023px) {
        .products__indicators {
            display: none;
        }
    }

    .products__indicators .products__button {
        margin-right: 8px;
    }

    .products__counter {
        margin-left: 16px;
        font-size: 13px;
        font-weight: 700;
        line-height: 1.84615;
    }

    .products__select {
        min-width: 154px;
        margin-left: auto;
    }

    @media only screen and (max-width: 767px) {
        .products__select {
            width: 100%;
            margin-top: 16px;
        }
    }

    @media only screen and (max-width: 767px) {
        body.dark .products__select .select {
            background: #272B30;
            box-shadow: inset 0 0 0 2px #272B30;
            color: #FCFCFC;
        }
    }

    .products__nav {
        display: flex;
        margin-left: auto;
    }

    @media only screen and (max-width: 1023px) {
        .products__nav {
            display: none;
        }
    }

    .products__link {
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    .products__link:hover,
    .products__link.active {
        color: #1A1D1F;
    }

    body.dark .products__link:hover,
    body.dark .products__link.active {
        color: #FCFCFC;
    }

    .products__link.active {
        background: #EFEFEF;
    }

    body.dark .products__link.active {
        background: #272B30;
    }

    .products__link:not(:last-child) {
        margin-right: 8px;
    }

    .products__tab {
        display: none;
    }

    .products__wrapper {
        margin: 0 -12px;
    }

    @media only screen and (max-width: 1023px) {
        .products__wrapper {
            margin: 0;
        }
    }

    .products__table {
        display: table;
        width: 100%;
    }

    @media only screen and (max-width: 1023px) {
        .products__table {
            display: block;
        }
    }

    .products__row {
        display: table-row;
    }

    @media only screen and (max-width: 1023px) {
        .products__row {
            position: relative;
            display: block;
        }
    }

    @media only screen and (max-width: 1023px) {
        .products__row:first-child {
            display: none;
        }
    }

    .products__row:first-child .products__col {
        padding: 0 12px 16px;
        vertical-align: middle;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .products__row:not(:first-child) {
        transition: background .2s;
    }

    .products__row:not(:first-child) .products__col:not(:first-child):not(:nth-child(2)) {
        padding-top: 20px;
    }

    @media only screen and (max-width: 1023px) {
        .products__row:not(:first-child) .products__col:not(:first-child):not(:nth-child(2)) {
            padding-top: 0;
        }
    }

    @media only screen and (min-width: 1024px) {
        .products__row:not(:first-child):hover {
            background: #F4F4F4;
        }

        body.dark .products__row:not(:first-child):hover {
            background: #272B30;
        }

        .products__row:not(:first-child):hover .products__number,
        .products__row:not(:first-child):hover .products__status {
            background: #FCFCFC;
        }

        body.dark .products__row:not(:first-child):hover .products__number {
            background: #33383F;
        }

        body.dark .products__row:not(:first-child):hover .products__status {
            background: #1A1D1F;
        }

        .products__row:not(:first-child):hover .control {
            visibility: visible;
            opacity: 1;
        }
    }

    @media only screen and (max-width: 1023px) {
        .products__row:not(:last-child) {
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .products__row:not(:last-child) {
            border-color: #272B30;
        }
    }

    .products__col {
        position: relative;
        display: table-cell;
        padding: 16px 12px;
        vertical-align: top;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 1023px) {
        .products__col {
            position: static;
            display: flex;
            align-items: center;
            padding: 0;
        }
    }

    body.dark .products__col {
        color: #FCFCFC;
    }

    .products__col:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 1px;
        background: #EFEFEF;
    }

    body.dark .products__col:after {
        background: #272B30;
    }

    @media only screen and (max-width: 1023px) {
        .products__col:after {
            display: none;
        }
    }

    .products__col:first-child {
        width: 56px;
        border-radius: 8px 0 0 8px;
        font-size: 0;
    }

    @media only screen and (max-width: 1023px) {
        .products__col:first-child {
            display: none;
        }
    }

    .products__col:first-child:after {
        left: 12px;
    }

    @media only screen and (max-width: 1023px) {
        .products__col:nth-child(4) {
            display: none;
        }
    }

    .products__col:last-child {
        border-radius: 0 8px 8px 0;
    }

    .products__col:last-child:after {
        right: 12px;
    }

    @media only screen and (max-width: 1023px) {
        .products__col:not(:first-child):not(:last-child) {
            margin-bottom: 12px;
        }
    }

    .products__item {
        display: flex;
        align-items: center;
        cursor: pointer;
        color: #1A1D1F;
        transition: color .2s;
    }

    @media only screen and (max-width: 767px) {
        .products__item {
            align-items: stretch;
        }
    }

    body.dark .products__item {
        color: #FCFCFC;
    }

    .products__item:hover {
        color: #2A85FF;
    }

    body.dark .products__item:hover {
        color: #2A85FF;
    }

    .products__preview {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    @media only screen and (max-width: 1023px) {
        .products__preview {
            width: 104px;
        }
    }

    .products__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .products__subtitle {
        max-width: 170px;
        margin-bottom: 4px;
    }

    @media only screen and (max-width: 1023px) {
        .products__subtitle {
            max-width: 100%;
            margin-bottom: 8px;
            padding-right: 42px;
            font-size: 18px;
            line-height: 1.33333;
            letter-spacing: -0.02em;
        }
    }

    @media only screen and (max-width: 1023px) {
        .products__wrap {
            display: flex;
            align-items: center;
        }
    }

    .products__category {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        .products__category {
            font-size: 15px;
        }
    }

    body.dark .products__category {
        color: #9A9FA5;
    }

    .products__sales {
        display: inline-flex;
        align-items: center;
    }

    .products__number,
    .products__price {
        display: inline-block;
        padding: 0 8px;
        border-radius: 6px;
        background: #EFEFEF;
        transition: background .2s;
    }

    body.dark .products__number,
    body.dark .products__price {
        background: #33383F;
        color: #FCFCFC;
    }

    .products__price {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .products__price {
            display: inline-block;
            margin-right: 12px;
        }
    }

    .products .balance {
        margin-left: 8px;
    }

    .products__box {
        display: flex;
        align-items: center;
    }

    .products__line {
        position: relative;
        flex-shrink: 0;
        width: 44px;
        height: 8px;
        margin-left: 8px;
    }

    @media only screen and (max-width: 1259px) {
        .products__line {
            width: 36px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .products__line {
            width: 44px;
        }
    }

    .products__progress {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        border-radius: 2px;
    }

    .products__progress_views {
        background: #2A85FF;
    }

    .products__progress_likes {
        background: #8E59FF;
    }

    .products__status {
        transition: background .2s;
    }

    .products .control {
        position: absolute;
        left: 12px;
        bottom: 16px;
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    @media only screen and (max-width: 1023px) {
        .products .control {
            top: 0;
            left: auto;
            right: 0;
            bottom: auto;
            visibility: visible;
            opacity: 1;
        }
    }

    .products__label {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .products__label {
            display: block;
            flex-shrink: 0;
            width: 124px;
            padding-right: 20px;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.23077;
            color: #6F767E;
        }
    }

    .products__foot {
        display: flex;
        justify-content: center;
        margin-top: 24px;
    }

    .products__arrow {
        width: 40px;
        height: 40px;
        border: 2px solid #EFEFEF;
        border-radius: 50%;
        transition: border-color .2s;
    }

    body.dark .products__arrow {
        border-color: transparent;
    }

    .products__arrow .icon {
        width: 20px;
        height: 20px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .products__arrow:hover {
        border-color: #EFEFEF;
    }

    .products__arrow:hover .icon {
        fill: #1A1D1F;
    }

    body.dark .products__arrow:hover {
        border-color: #272B30;
    }

    body.dark .products__arrow:hover .icon {
        fill: #FCFCFC;
    }

    .products__arrow:not(:last-child) {
        margin-right: 8px;
    }

    .statistics__wrapper {
        margin: 0 -12px;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__wrapper {
            margin: 0;
        }
    }

    .statistics__table {
        display: table;
        width: 100%;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__table {
            display: block;
        }
    }

    .statistics__row {
        display: table-row;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__row {
            display: block;
        }
    }

    @media only screen and (max-width: 1023px) {
        .statistics__row:first-child {
            margin-bottom: 24px;
        }
    }

    .statistics__row:first-child .statistics__col {
        padding: 0 12px 16px;
        vertical-align: middle;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__row:first-child .statistics__col {
            padding: 0;
        }
    }

    @media only screen and (max-width: 1023px) {
        .statistics__row:first-child .statistics__col:nth-child(2) {
            display: none;
        }
    }

    .statistics__row:not(:first-child) {
        transition: background .2s;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__row:not(:first-child) {
            position: relative;
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .statistics__row:not(:first-child) {
            border-color: #272B30;
        }
    }

    @media only screen and (min-width: 1024px) {
        .statistics__row:not(:first-child):hover {
            background: #F4F4F4;
        }

        body.dark .statistics__row:not(:first-child):hover {
            background: #272B30;
        }

        .statistics__row:not(:first-child):hover .control {
            visibility: visible;
            opacity: 1;
        }
    }

    .statistics__col {
        position: relative;
        display: table-cell;
        vertical-align: top;
        padding: 16px 12px;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__col {
            position: static;
            display: block;
            padding: 0;
        }
    }

    .statistics__col:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 1px;
        background: #EFEFEF;
    }

    body.dark .statistics__col:after {
        background: #272B30;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__col:after {
            display: none;
        }
    }

    .statistics__col:first-child {
        width: 56px;
        border-radius: 8px 0 0 8px;
        font-size: 0;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__col:first-child {
            display: none;
        }
    }

    .statistics__col:first-child:after {
        left: 12px;
    }

    .statistics__col:nth-child(2) {
        width: 300px;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__col:nth-child(2) {
            width: 100%;
        }
    }

    .statistics__col:last-child {
        border-radius: 0 8px 8px 0;
    }

    .statistics__col:last-child:after {
        right: 12px;
    }

    .statistics__control {
        display: flex;
        align-items: center;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__control {
            display: block;
        }
    }

    .statistics__info {
        margin-right: auto;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__info {
            display: none;
        }
    }

    .statistics__indicators {
        display: flex;
        flex-wrap: wrap;
        margin: -8px 0 0 -24px;
    }

    @media only screen and (max-width: 1419px) {
        .statistics__indicators {
            margin-left: -12px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .statistics__indicators {
            margin-left: -24px;
        }
    }

    .statistics__indicators .statistics__legend {
        position: relative;
        margin: 8px 0 0 24px;
        padding-left: 24px;
    }

    @media only screen and (max-width: 1419px) {
        .statistics__indicators .statistics__legend {
            margin-left: 12px;
        }
    }

    @media only screen and (max-width: 1259px) {
        .statistics__indicators .statistics__legend {
            padding-left: 18px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .statistics__indicators .statistics__legend {
            margin-left: 24px;
            padding-left: 24px;
        }
    }

    .statistics__indicators .statistics__color {
        position: absolute;
        top: 2px;
        left: 0;
    }

    .statistics__color {
        width: 12px;
        height: 12px;
        border-radius: 4px;
    }

    .statistics__item {
        display: flex;
        align-items: center;
        cursor: pointer;
        color: #1A1D1F;
        transition: color .2s;
    }

    @media only screen and (max-width: 767px) {
        .statistics__item {
            align-items: stretch;
        }
    }

    body.dark .statistics__item {
        color: #FCFCFC;
    }

    .statistics__item:hover {
        color: #2A85FF;
    }

    body.dark .statistics__item:hover {
        color: #2A85FF;
    }

    .statistics__preview {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__preview {
            width: 104px;
        }
    }

    .statistics__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .statistics__product {
        max-width: 170px;
        margin-bottom: 4px;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__product {
            max-width: 100%;
            margin-bottom: 8px;
            padding-right: 42px;
            font-size: 18px;
            line-height: 1.33333;
            letter-spacing: -0.02em;
        }
    }

    .statistics__date {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .statistics__line {
        display: flex;
        margin: 11px 0 0 -1px;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__line {
            margin-top: 20px;
        }
    }

    .statistics__box {
        position: relative;
        height: 12px;
        margin-left: 1px;
        border-radius: 2px;
        cursor: pointer;
    }

    .statistics__box:hover .statistics__tooltip {
        visibility: visible;
        opacity: 1;
    }

    .statistics__tooltip {
        position: absolute;
        left: 50%;
        bottom: calc(100% + 4px);
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        padding: 8px;
        background: #272B30;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1), 0px 2px 4px rgba(0, 0, 0, 0.1), inset 0px 0px 1px #000000;
        border-radius: 8px;
        font-size: 12px;
        line-height: 1;
        visibility: hidden;
        opacity: 0;
        transition: .2s;
    }

    .statistics__subtitle {
        margin-bottom: 8px;
        white-space: nowrap;
        color: #EFEFEF;
    }

    .statistics__tooltip .statistics__legend {
        display: flex;
        align-items: center;
        color: #FCFCFC;
    }

    .statistics__tooltip .statistics__color {
        flex-shrink: 0;
        margin-right: 4px;
    }

    .statistics .control {
        position: absolute;
        left: 12px;
        bottom: 16px;
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    @media only screen and (max-width: 1023px) {
        .statistics .control {
            top: 0;
            left: auto;
            right: 0;
            bottom: auto;
            visibility: visible;
            opacity: 1;
        }
    }

    .statistics__foot {
        margin-top: 20px;
        text-align: center;
    }

    @media only screen and (max-width: 1023px) {
        .statistics__foot {
            margin-top: 0;
        }
    }

    .switch {
        display: inline-block;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        font-size: 0;
    }

    .switch__input {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .switch__input:checked+.switch__inner .switch__box {
        background: #2A85FF;
    }

    .switch__input:checked+.switch__inner .switch__box:before {
        -webkit-transform: translate(24px, -50%);
        transform: translate(24px, -50%);
        background: #FCFCFC;
    }

    .switch__inner {
        position: relative;
        display: inline-block;
        transition: all .2s;
    }

    .switch__box {
        position: relative;
        display: block;
        width: 48px;
        height: 24px;
        background: #F4F4F4;
        border-radius: 12px;
        transition: all .2s;
    }

    body.dark .switch__box {
        background: #111315;
    }

    .switch__box:before {
        content: "";
        position: absolute;
        top: 50%;
        left: 2px;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #FCFCFC;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2), inset 0px 2px 2px #FFFFFF, inset 0px -1px 1px rgba(0, 0, 0, 0.1);
        transition: all .2s;
    }

    body.dark .switch__box:before {
        background: #272B30;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2), inset 0px 1px 2px rgba(255, 255, 255, 0.1), inset 0px -1px 1px rgba(0, 0, 0, 0.1);
    }

    .field__label {
        margin-bottom: 14px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #33383F;
    }

    body.dark .field__label {
        color: #EFEFEF;
    }

    .field .tooltip {
        position: relative;
        top: -1px;
    }

    .field .tooltip .icon {
        fill: #9A9FA5;
    }

    .field__wrap {
        position: relative;
    }


    .field__input {
        width: 50%;
        height: 48px;
        padding: 0 10px;
        border-radius: 12px;
        border: 2px solid transparent;
        background: #F4F4F4;
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #1A1D1F;
        transition: all .2s;
    }

    body.dark .field__input {
        border-color: #272B30;
        background: #272B30;
        color: #FCFCFC;
    }

    .field__input::-webkit-input-placeholder {
        color: #6F767E;
    }

    .field__input::-moz-placeholder {
        color: #6F767E;
    }

    .field__input:-ms-input-placeholder {
        color: #6F767E;
    }

    .field__input::-ms-input-placeholder {
        color: #6F767E;
    }

    .field__input::placeholder {
        color: #6F767E;
    }

    body.dark .field__input::-webkit-input-placeholder {
        color: #9A9FA5;
    }

    body.dark .field__input::-moz-placeholder {
        color: #9A9FA5;
    }

    body.dark .field__input:-ms-input-placeholder {
        color: #9A9FA5;
    }

    body.dark .field__input::-ms-input-placeholder {
        color: #9A9FA5;
    }

    body.dark .field__input::placeholder {
        color: #9A9FA5;
    }

    .field__input:focus {
        border-color: #9A9FA5;
        background: #FFFFFF;
    }

    body.dark .field__input:focus {
        border-color: #33383F;
        background: #111315;
    }

    .endereco {
        margin-bottom: 1rem;
    }

    .endereco__label {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
        display: block;

    }

    .field__wrap {
        display: flex;
        flex-direction: column;
        margin-bottom: -10px;
    }

    .endereco__input {
        font-size: 1rem;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 1rem;
        width: 50%;
        background: #F4F4F4;
    }

    @media (min-width: 768px) {
        .field__wrap {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .endereco__input {
            flex: 1;
            padding: 10px;
            border-radius: 10px;

        }
    }

    .field__icon,
    .field__copy {
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 48px;
    }

    .field__icon .icon,
    .field__copy .icon {
        width: 24px;
        height: 24px;
    }

    .field__icon {
        left: 0;
        pointer-events: none;
    }

    .field__icon .icon {
        fill: #6F767E;
    }

    .field__copy {
        right: 0;
    }

    .field__copy .icon {
        fill: #6F767E;
        transition: fill .2s;
    }

    .field__copy:hover .icon {
        fill: #2A85FF;
    }

    .field__currency {
        position: absolute;
        top: 2px;
        left: 2px;
        bottom: 2px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 46px;
        padding-top: 1px;
        border-radius: 10px 0 0 10px;
        background: #F4F4F4;
        color: #1A1D1F;
    }

    body.dark .field__currency {
        background: #272B30;
        color: #6F767E;
    }

    .field_icon .field__input {
        padding-left: 48px;
    }

    .field_currency .field__input {
        padding-left: 58px;
        background: none;
        border-color: #EFEFEF;
    }

    .field_currency .field__input:focus {
        border-color: #9A9FA5;
    }

    body.dark .field_currency .field__input {
        border-color: #272B30;
    }

    body.dark .field_currency .field__input:focus {
        border-color: #33383F;
    }

    .field_copy .field__input {
        padding-right: 48px;
    }

    .field.error .field__icon .icon {
        fill: #FF6A55;
    }

    .field.error .field__wrap:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 48px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'%3E%3Cpath d='M12 15a1 1 0 0 0 1-1V9a1 1 0 1 0-2 0v5a1 1 0 0 0 1 1zm7.675 2.504L12.87 5.563a1 1 0 0 0-1.738 0L4.327 17.504A1 1 0 0 0 5.196 19h13.61a1 1 0 0 0 .869-1.495zM14.607 4.573c-1.151-2.019-4.062-2.019-5.213 0L2.589 16.514C1.45 18.514 2.894 21 5.196 21h13.61c2.302 0 3.746-2.486 2.606-4.485L14.607 4.573z' fill-rule='evenodd' fill='%23ff6a55'/%3E%3Cpath d='M13 17a1 1 0 1 1-2 0 1 1 0 1 1 2 0z' fill='%23ff6a55'/%3E%3C/svg%3E") no-repeat 50% 50%/24px auto;
    }

    .field.error .field__input {
        padding-right: 48px;
        background: rgba(255, 188, 153, 0.25);
        border-color: transparent;
        color: #FF6A55;
    }

    body.dark .field.error .field__input:focus {
        border-color: #FF6A55;
        color: #FF6A55;
    }

    .field.error .field__input::-webkit-input-placeholder {
        color: #FF6A55;
    }

    .field.error .field__input::-moz-placeholder {
        color: #FF6A55;
    }

    .field.error .field__input:-ms-input-placeholder {
        color: #FF6A55;
    }

    .field.error .field__input::-ms-input-placeholder {
        color: #FF6A55;
    }

    .field.error .field__input::placeholder {
        color: #FF6A55;
    }

    .field.success .field__wrap:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 48px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'%3E%3Cpath fill-rule='evenodd' d='M20.707 6.293a1 1 0 0 1 0 1.414l-8.586 8.586a3 3 0 0 1-4.243 0l-3.586-3.586a1 1 0 0 1 1.414-1.414l3.586 3.586a1 1 0 0 0 1.414 0l8.586-8.586a1 1 0 0 1 1.414 0z' fill='%2383bf6e'/%3E%3C/svg%3E") no-repeat 50% 50%/24px auto;
    }

    .field.success .field__input {
        padding-right: 48px;
        background: #FFFFFF;
        border-color: #9A9FA5;
    }

    body.dark .field.success .field__input {
        background: #111315;
    }

    .file__label {
        margin-bottom: 14px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #33383F;
    }

    body.dark .file__label {
        color: #EFEFEF;
    }

    .file .tooltip {
        position: relative;
        top: -1px;
    }

    .file .tooltip .icon {
        fill: #9A9FA5;
    }

    .file__wrap {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
        border-radius: 12px;
        background: #F4F4F4;
        overflow: hidden;
    }

    body.dark .file__wrap {
        background: #272B30;
    }

    .file__input {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 340px;
        opacity: 0;
    }

    .file__input:hover+.file__box {
        border-color: #6F767E;
    }

    body.dark .file__input:hover+.file__box {
        border-color: #33383F;
    }

    .file__box {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 48px;
        padding: 0 20px;
        border: 2px solid #EFEFEF;
        border-radius: 12px;
        background: #FCFCFC;
        box-shadow: 0px 12px 13px -6px rgba(0, 0, 0, 0.04);
        font-size: 15px;
        font-weight: 700;
        line-height: 1.6;
        transition: border-color .2s;
    }

    body.dark .file__box {
        background: #1A1D1F;
        border-color: #272B30;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 12px 13px -6px rgba(0, 0, 0, 0.04), inset 0px 2px 4px #31353B;
    }

    .file__box .icon {
        width: 24px;
        height: 24px;
        margin-right: 8px;
    }

    body.dark .file__box .icon {
        fill: #FCFCFC;
    }

    .create__row {
        display: flex;
    }

    @media only screen and (max-width: 1023px) {
        .create__row {
            display: block;
        }
    }

    .create__col:first-child {
        flex: 0 0 calc(100% - 340px);
        width: calc(100% - 340px);
        padding-right: 8px;
    }

    @media only screen and (max-width: 1259px) {
        .create__col:first-child {
            flex: 0 0 calc(100% - 296px);
            width: calc(100% - 296px);
        }
    }

    @media only screen and (max-width: 1023px) {
        .create__col:first-child {
            width: 100%;
            padding: 0;
        }
    }

    .create__col:nth-child(2) {
        flex-shrink: 0;
        width: 340px;
    }

    @media only screen and (max-width: 1259px) {
        .create__col:nth-child(2) {
            width: 296px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .create__col:nth-child(2) {
            width: auto;
        }
    }

    .create__card:not(:last-child) {
        margin-bottom: 8px;
    }

    .create .card__button .icon {
        width: 24px;
        height: 24px;
    }

    .create__card>.field:not(:last-child),
    .create .editor:not(:last-child),
    .create .file:not(:last-child) {
        margin-bottom: 32px;
    }

    @media only screen and (max-width: 1259px) {

        .create__card>.field:not(:last-child),
        .create .editor:not(:last-child),
        .create .file:not(:last-child) {
            margin-bottom: 24px;
        }
    }

    .create__group {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-end;
        margin: 0 -6px -12px;
    }

    @media only screen and (max-width: 767px) {
        .create__group {
            display: block;
            margin: 0;
        }
    }

    .create__group .field {
        flex: 0 0 calc(50% - 12px);
        width: calc(50% - 12px);
        margin: 0 6px 12px;
    }

    @media only screen and (max-width: 767px) {
        .create__group .field {
            width: 100%;
            margin: 12px 0 0;
        }
    }

    .create__line {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
        padding-bottom: 16px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .create__line {
        border-color: #272B30;
    }

    .create__info {
        margin-right: auto;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #33383F;
    }

    body.dark .create__info {
        color: #EFEFEF;
    }

    .create .tooltip {
        position: relative;
        top: -1;
    }

    .create .tooltip .icon {
        fill: #9A9FA5;
    }

    .create .switch {
        margin-left: 12px;
    }

    .create__fieldset {
        display: flex;
        margin: 0 -6px;
    }

    .create__fieldset .field {
        flex: 0 0 calc(50% - 12px);
        width: calc(50% - 12px);
        margin: 0 6px;
    }

    .create__fieldset .field__label {
        margin-bottom: 12px;
        font-size: 12px;
        line-height: 1.33333;
        font-weight: 700;
        color: #6F767E;
    }

    .create__label {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #33383F;
    }

    body.dark .create__label {
        color: #EFEFEF;
    }

    .create__list {
        display: flex;
        flex-wrap: wrap;
        margin: -4px -16px 32px 0;
    }

    @media only screen and (max-width: 1259px) {
        .create__list {
            margin-bottom: 24px;
        }
    }

    .create__list .checkbox {
        flex: 0 0 calc(33.33% - 16px);
        width: calc(33.33% - 16px);
        margin: 16px 16px 0 0;
    }

    @media only screen and (max-width: 767px) {
        .create__list .checkbox {
            flex: 0 0 calc(50% - 16px);
            width: calc(50% - 16px);
        }
    }

    .create__top {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }

    .create__top .create__label {
        margin-right: auto;
    }

    .create__counter {
        font-size: 13px;
        font-weight: 500;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .create__counter span {
        color: #1A1D1F;
    }

    body.dark .create__counter span {
        color: #FCFCFC;
    }

    .create__preview {
        position: sticky;
        top: 102px;
    }

    @media only screen and (max-width: 1339px) {
        .create__preview {
            top: 86px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .create__preview {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 50;
            display: flex;
            padding: 64px 16px;
            overflow: auto;
            background: #F4F4F4;
            visibility: hidden;
            opacity: 0;
            transition: all .2s;
        }

        body.dark .create__preview {
            background: #111315;
        }

        .create__preview.visible {
            visibility: visible;
            opacity: 1;
        }
    }

    @media only screen and (max-width: 1259px) {
        .create__preview .card {
            padding: 16px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .create__preview .card {
            max-width: 340px;
            margin: auto;
        }
    }

    .create__preview .card__head {
        margin-bottom: 24px;
    }

    .create__close {
        position: absolute;
        top: 32px;
        left: 32px;
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .create__close {
            display: inline-block;
        }
    }

    .create__close .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
    }

    .create__photo {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 16px;
    }

    .create__photo img {
        width: 100%;
        border-radius: 12px;
    }

    .create__flex {
        display: flex;
        align-items: flex-start;
        margin-bottom: 8px;
    }

    .create__subtitle {
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .create__subtitle {
            font-size: 18px;
        }
    }

    .create__price {
        flex-shrink: 0;
        margin-left: 12px;
        padding: 0 8px;
        background: #B5E4CA;
        border-radius: 6px;
        line-height: 32px;
        font-weight: 700;
    }

    body.dark .create__price {
        color: #1A1D1F;
    }

    .create__user {
        display: flex;
        align-items: center;
    }

    .create__avatar {
        position: relative;
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        margin-right: 12px;
    }

    .create__avatar>img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .create__text {
        font-weight: 500;
        color: #6F767E;
    }

    .create__text span {
        font-weight: 600;
        color: #1A1D1F;
    }

    body.dark .create__text span {
        color: #FCFCFC;
    }

    .panel {
        position: relative;
        display: flex;
        align-items: center;
        margin: auto -40px -40px;
        padding: 60px 40px 20px;
    }

    @media only screen and (max-width: 1339px) {
        .panel {
            margin: auto -24px -32px;
            padding: 44px 24px 20px;
        }
    }

    @media only screen and (max-width: 767px) {
        .panel {
            display: block;
            margin: auto -16px -24px;
            padding: 40px 16px 16px;
        }
    }

    .panel:before {
        content: "";
        position: absolute;
        top: 40px;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
        background: #FCFCFC;
        box-shadow: inset 1px 0px 0px #F4F4F4;
    }

    @media only screen and (max-width: 1339px) {
        .panel:before {
            top: 24px;
        }
    }

    body.dark .panel:before {
        background: #1A1D1F;
        box-shadow: inset 1px 0px 0px #111315;
    }

    .panel__info {
        margin-right: auto;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    @media only screen and (max-width: 767px) {
        .panel__info {
            margin: 0 0 24px;
        }
    }

    .panel__info .icon {
        width: 24px;
        height: 24px;
        margin-right: 12px;
        fill: #6F767E;
    }

    .panel__info span {
        color: #1A1D1F;
    }

    body.dark .panel__info span {
        color: #FCFCFC;
    }

    .panel__note {
        display: inline-flex;
        align-items: center;
        height: 40px;
        padding: 0 10px;
        border-radius: 8px;
        background: #272B30;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        color: #F4F4F4;
    }

    .panel__note>.icon {
        width: 24px;
        height: 24px;
        margin-right: 8px;
        fill: #83BF6E;
    }

    .panel__note span {
        position: relative;
        top: -2px;
        margin-left: 4px;
    }

    .panel .close {
        margin-left: 20px;
    }

    .panel .close .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .panel .close:hover .icon {
        fill: #FCFCFC;
    }

    .panel__btns {
        display: flex;
        align-items: center;
        margin-left: auto;
    }

    .panel__btns .panel__button {
        margin-right: 8px;
    }

    @media only screen and (max-width: 767px) {
        .panel__btns .panel__button {
            flex-grow: 1;
        }
    }

    .panel__btns .panel__button .icon {
        width: 24px;
        height: 24px;
    }

    .panel .actions__button {
        width: 48px;
        height: 48px;
        border: 2px solid #EFEFEF;
        border-radius: 12px;
        transition: all .2s;
    }

    .panel .actions__button .icon {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        fill: #6F767E;
    }

    .panel .actions__button:hover {
        background: #EFEFEF;
    }

    .panel .actions__button:hover .icon {
        fill: #1A1D1F;
    }

    body.dark .panel .actions__button {
        border-color: #272B30;
        background: transparent;
    }

    .panel .actions__option:first-child {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .panel .actions__option:first-child {
            display: flex;
        }
    }

    .panel .actions__body {
        right: 0;
    }

    .panel .actions__body:before {
        right: 14px;
    }

    .loader {
        width: 1em;
        height: 1em;
        border-radius: 50%;
        position: relative;
        font-size: 4px;
        -webkit-animation: loader 1.1s infinite ease;
        animation: loader 1.1s infinite ease;
        text-indent: -9999em;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }

    body.dark .loader {
        -webkit-animation-name: loader-white;
        animation-name: loader-white;
    }

    .loader_white {
        -webkit-animation-name: loader-white;
        animation-name: loader-white;
    }

    @-webkit-keyframes loader {

        0%,
        100% {
            box-shadow: 0em -2.6em 0em 0em #777e90, 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2), 2.5em 0em 0 0em rgba(119, 126, 144, 0.2), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.2), 0em 2.5em 0 0em rgba(119, 126, 144, 0.2), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.2), -2.6em 0em 0 0em rgba(119, 126, 144, 0.5), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.7);
        }

        12.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.7), 1.8em -1.8em 0 0em #777e90, 2.5em 0em 0 0em rgba(119, 126, 144, 0.2), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.2), 0em 2.5em 0 0em rgba(119, 126, 144, 0.2), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.2), -2.6em 0em 0 0em rgba(119, 126, 144, 0.2), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.5);
        }

        25% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.5), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.7), 2.5em 0em 0 0em #777e90, 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.2), 0em 2.5em 0 0em rgba(119, 126, 144, 0.2), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.2), -2.6em 0em 0 0em rgba(119, 126, 144, 0.2), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2);
        }

        37.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.2), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.5), 2.5em 0em 0 0em rgba(119, 126, 144, 0.7), 1.75em 1.75em 0 0em #777e90, 0em 2.5em 0 0em rgba(119, 126, 144, 0.2), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.2), -2.6em 0em 0 0em rgba(119, 126, 144, 0.2), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2);
        }

        50% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.2), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2), 2.5em 0em 0 0em rgba(119, 126, 144, 0.5), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.7), 0em 2.5em 0 0em #777e90, -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.2), -2.6em 0em 0 0em rgba(119, 126, 144, 0.2), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2);
        }

        62.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.2), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2), 2.5em 0em 0 0em rgba(119, 126, 144, 0.2), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.5), 0em 2.5em 0 0em rgba(119, 126, 144, 0.7), -1.8em 1.8em 0 0em #777e90, -2.6em 0em 0 0em rgba(119, 126, 144, 0.2), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2);
        }

        75% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.2), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2), 2.5em 0em 0 0em rgba(119, 126, 144, 0.2), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.2), 0em 2.5em 0 0em rgba(119, 126, 144, 0.5), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.7), -2.6em 0em 0 0em #777e90, -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2);
        }

        87.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.2), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2), 2.5em 0em 0 0em rgba(119, 126, 144, 0.2), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.2), 0em 2.5em 0 0em rgba(119, 126, 144, 0.2), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.5), -2.6em 0em 0 0em rgba(119, 126, 144, 0.7), -1.8em -1.8em 0 0em #777e90;
        }
    }

    @keyframes loader {

        0%,
        100% {
            box-shadow: 0em -2.6em 0em 0em #777e90, 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2), 2.5em 0em 0 0em rgba(119, 126, 144, 0.2), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.2), 0em 2.5em 0 0em rgba(119, 126, 144, 0.2), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.2), -2.6em 0em 0 0em rgba(119, 126, 144, 0.5), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.7);
        }

        12.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.7), 1.8em -1.8em 0 0em #777e90, 2.5em 0em 0 0em rgba(119, 126, 144, 0.2), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.2), 0em 2.5em 0 0em rgba(119, 126, 144, 0.2), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.2), -2.6em 0em 0 0em rgba(119, 126, 144, 0.2), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.5);
        }

        25% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.5), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.7), 2.5em 0em 0 0em #777e90, 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.2), 0em 2.5em 0 0em rgba(119, 126, 144, 0.2), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.2), -2.6em 0em 0 0em rgba(119, 126, 144, 0.2), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2);
        }

        37.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.2), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.5), 2.5em 0em 0 0em rgba(119, 126, 144, 0.7), 1.75em 1.75em 0 0em #777e90, 0em 2.5em 0 0em rgba(119, 126, 144, 0.2), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.2), -2.6em 0em 0 0em rgba(119, 126, 144, 0.2), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2);
        }

        50% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.2), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2), 2.5em 0em 0 0em rgba(119, 126, 144, 0.5), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.7), 0em 2.5em 0 0em #777e90, -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.2), -2.6em 0em 0 0em rgba(119, 126, 144, 0.2), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2);
        }

        62.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.2), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2), 2.5em 0em 0 0em rgba(119, 126, 144, 0.2), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.5), 0em 2.5em 0 0em rgba(119, 126, 144, 0.7), -1.8em 1.8em 0 0em #777e90, -2.6em 0em 0 0em rgba(119, 126, 144, 0.2), -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2);
        }

        75% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.2), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2), 2.5em 0em 0 0em rgba(119, 126, 144, 0.2), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.2), 0em 2.5em 0 0em rgba(119, 126, 144, 0.5), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.7), -2.6em 0em 0 0em #777e90, -1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2);
        }

        87.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(119, 126, 144, 0.2), 1.8em -1.8em 0 0em rgba(119, 126, 144, 0.2), 2.5em 0em 0 0em rgba(119, 126, 144, 0.2), 1.75em 1.75em 0 0em rgba(119, 126, 144, 0.2), 0em 2.5em 0 0em rgba(119, 126, 144, 0.2), -1.8em 1.8em 0 0em rgba(119, 126, 144, 0.5), -2.6em 0em 0 0em rgba(119, 126, 144, 0.7), -1.8em -1.8em 0 0em #777e90;
        }
    }

    @-webkit-keyframes loader-white {

        0%,
        100% {
            box-shadow: 0em -2.6em 0em 0em #ffffff, 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.5), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7);
        }

        12.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.7), 1.8em -1.8em 0 0em #ffffff, 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5);
        }

        25% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.5), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7), 2.5em 0em 0 0em #ffffff, 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
        }

        37.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5), 2.5em 0em 0 0em rgba(255, 255, 255, 0.7), 1.75em 1.75em 0 0em #ffffff, 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
        }

        50% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.5), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.7), 0em 2.5em 0 0em #ffffff, -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
        }

        62.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.5), 0em 2.5em 0 0em rgba(255, 255, 255, 0.7), -1.8em 1.8em 0 0em #ffffff, -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
        }

        75% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.5), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.7), -2.6em 0em 0 0em #ffffff, -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
        }

        87.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.5), -2.6em 0em 0 0em rgba(255, 255, 255, 0.7), -1.8em -1.8em 0 0em #ffffff;
        }
    }

    @keyframes loader-white {

        0%,
        100% {
            box-shadow: 0em -2.6em 0em 0em #ffffff, 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.5), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7);
        }

        12.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.7), 1.8em -1.8em 0 0em #ffffff, 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5);
        }

        25% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.5), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7), 2.5em 0em 0 0em #ffffff, 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
        }

        37.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5), 2.5em 0em 0 0em rgba(255, 255, 255, 0.7), 1.75em 1.75em 0 0em #ffffff, 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
        }

        50% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.5), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.7), 0em 2.5em 0 0em #ffffff, -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
        }

        62.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.5), 0em 2.5em 0 0em rgba(255, 255, 255, 0.7), -1.8em 1.8em 0 0em #ffffff, -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
        }

        75% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.5), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.7), -2.6em 0em 0 0em #ffffff, -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
        }

        87.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.5), -2.6em 0em 0 0em rgba(255, 255, 255, 0.7), -1.8em -1.8em 0 0em #ffffff;
        }
    }

    .schedule__wrapper {
        margin: 0 -12px;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__wrapper {
            margin: 0;
        }
    }

    .schedule__table {
        display: table;
        width: 100%;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__table {
            display: block;
        }
    }

    .schedule__row {
        display: table-row;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__row:first-child {
            display: none;
        }
    }

    .schedule__row:first-child .schedule__col {
        padding: 0 12px 16px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .schedule__row:not(:first-child) {
        transition: background .2s;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__row:not(:first-child) {
            position: relative;
            display: block;
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .schedule__row:not(:first-child) {
            border-color: #272B30;
        }
    }

    @media only screen and (min-width: 1260px) {
        .schedule__row:not(:first-child):hover {
            background: #F4F4F4;
        }

        body.dark .schedule__row:not(:first-child):hover {
            background: #272B30;
        }

        .schedule__row:not(:first-child):hover .schedule__control {
            visibility: visible;
            opacity: 1;
        }
    }

    .schedule__col {
        position: relative;
        display: table-cell;
        padding: 16px 12px;
        vertical-align: middle;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__col {
            display: block;
            position: static;
            padding: 0;
        }
    }

    .schedule__col:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 1px;
        background: #EFEFEF;
    }

    body.dark .schedule__col:after {
        background: #272B30;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__col:after {
            display: none;
        }
    }

    .schedule__col:first-child {
        width: 56px;
        border-radius: 8px 0 0 8px;
        font-size: 0;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__col:first-child {
            display: none;
        }
    }

    .schedule__col:first-child:after {
        left: 12px;
    }

    .schedule__col:last-child {
        padding-right: 164px;
        border-radius: 0 8px 8px 0;
        color: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__col:last-child {
            padding: 0;
        }
    }

    .schedule__col:last-child:after {
        right: 12px;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__col:not(:nth-child(2)) {
            display: none;
        }
    }

    .schedule__item {
        display: flex;
        align-items: center;
        cursor: pointer;
        transition: color .2s;
    }

    @media only screen and (max-width: 767px) {
        .schedule__item {
            align-items: stretch;
        }
    }

    body.dark .schedule__item {
        color: #FCFCFC;
    }

    .schedule__item:hover {
        color: #2A85FF;
    }

    .schedule__item .schedule__price,
    .schedule__item .schedule__empty,
    .schedule__item .schedule__date {
        display: none;
    }

    @media only screen and (max-width: 1023px) {

        .schedule__item .schedule__price,
        .schedule__item .schedule__empty {
            display: inline-block;
        }
    }

    @media only screen and (max-width: 1023px) {
        .schedule__item .schedule__date {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.23077;
            color: #9A9FA5;
        }

        .schedule__item .schedule__date .icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
            fill: #9A9FA5;
        }
    }

    .schedule__preview {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__preview {
            width: 104px;
            height: 116px;
        }
    }

    .schedule__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .schedule__product {
        max-width: 170px;
        margin-bottom: 4px;
        font-weight: 700;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__product {
            max-width: 100%;
            margin-bottom: 8px;
            padding-right: 44px;
            font-size: 18px;
            line-height: 1.33333;
            letter-spacing: -0.02em;
        }
    }

    .schedule__link {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__link {
            display: none;
        }
    }

    .schedule__price,
    .schedule__empty {
        flex-shrink: 0;
        display: inline-block;
        padding: 0 8px;
        border-radius: 6px;
        line-height: 32px;
        font-weight: 700;
    }

    .schedule__price {
        background: #B5E4CA;
    }

    body.dark .schedule__price {
        color: #1A1D1F;
    }

    .schedule__empty {
        background: #EFEFEF;
    }

    body.dark .schedule__empty {
        background: #272B30;
        color: #FCFCFC;
    }

    .schedule__control {
        position: absolute;
        top: 50%;
        right: 12px;
        display: flex;
        align-items: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    @media only screen and (max-width: 1259px) {
        .schedule__control {
            visibility: visible;
            opacity: 1;
        }
    }

    @media only screen and (max-width: 1023px) {
        .schedule__control {
            display: none;
        }
    }

    .schedule__control .schedule__button {
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #FCFCFC;
    }

    @media only screen and (max-width: 1259px) {
        .schedule__control .schedule__button {
            background: #EFEFEF;
        }
    }

    body.dark .schedule__control .schedule__button {
        background: #1A1D1F;
    }

    @media only screen and (max-width: 1259px) {
        body.dark .schedule__control .schedule__button {
            background: #272B30;
        }
    }

    .schedule__control .schedule__button .icon {
        width: 20px;
        height: 20px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .schedule__control .schedule__button:hover .icon {
        fill: #2A85FF;
    }

    .schedule__control .schedule__button:not(:last-child) {
        margin-right: 16px;
    }

    .schedule .actions {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .schedule .actions {
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
        }

        .schedule .actions.active {
            z-index: 10;
        }
    }

    body.dark .schedule .actions__button {
        background: none;
    }

    .schedule__foot {
        margin-top: 20px;
        text-align: center;
    }

    @media only screen and (max-width: 1023px) {
        .schedule__foot {
            margin-top: 0;
        }
    }

    .schedule__foot .schedule__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    .drafts .card__head {
        margin-bottom: 44px;
    }

    @media only screen and (max-width: 1023px) {
        .drafts .card__head {
            margin-bottom: 32px;
        }
    }

    @media only screen and (max-width: 767px) {
        .drafts .card__head {
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
    }

    .drafts .card__title {
        margin-right: 24px;
    }

    @media only screen and (max-width: 1023px) {
        .drafts .form {
            width: 300px;
        }
    }

    @media only screen and (max-width: 767px) {
        .drafts .form {
            width: 100%;
            margin-top: 16px;
            order: 3;
        }
    }

    .drafts__tab {
        display: none;
    }

    .drafts__list {
        display: flex;
        flex-wrap: wrap;
        margin: -32px -12px 0;
    }

    @media only screen and (max-width: 639px) {
        .drafts__list {
            display: block;
            margin: 0 -8px;
        }
    }

    .drafts .summary {
        flex: 0 0 calc(33.333% - 24px);
        width: calc(33.333% - 24px);
        margin: 32px 12px 0;
    }

    @media only screen and (max-width: 1023px) {
        .drafts .summary {
            flex: 0 0 calc(50% - 24px);
            width: calc(50% - 24px);
        }
    }

    @media only screen and (max-width: 639px) {
        .drafts .summary {
            width: 100%;
            margin: 0;
        }

        .drafts .summary:not(:last-child) {
            margin-bottom: 32px;
        }
    }

    .drafts__foot {
        margin-top: 44px;
        text-align: center;
    }

    @media only screen and (max-width: 767px) {
        .drafts__foot {
            margin-top: 32px;
        }
    }

    .drafts__foot .drafts__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    .calendar__title {
        padding-right: 48px;
    }

    .calendar__note {
        margin-top: 24px;
        padding-top: 24px;
        border-top: 1px solid #EFEFEF;
        font-weight: 500;
        color: #6F767E;
    }

    body.dark .calendar__note {
        border-color: #272B30;
    }

    .calendar__list {
        margin-top: 24px;
    }

    .calendar__item {
        display: block;
    }

    @media only screen and (max-width: 1259px) {
        .calendar__item {
            position: relative;
        }
    }

    @media only screen and (max-width: 767px) {
        .calendar__item {
            position: static;
        }
    }

    .calendar__item.active .calendar__head {
        border-color: #2A85FF;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.05);
    }

    .calendar__item.active .calendar__head .icon {
        fill: #1A1D1F;
    }

    body.dark .calendar__item.active .calendar__head .icon {
        fill: #FCFCFC;
    }

    .calendar__item.active .calendar__body {
        visibility: visible;
        opacity: 1;
    }

    .calendar__item:not(:last-child) {
        margin-bottom: 8px;
    }

    .calendar__head {
        display: flex;
        min-height: 68px;
        padding: 14px;
        border-radius: 12px;
        border: 2px solid #EFEFEF;
        cursor: pointer;
        transition: all .2s;
    }

    .calendar__head .icon {
        width: 24px;
        height: 24px;
        flex-shrink: 0;
        margin-right: 12px;
        fill: #6F767E;
        transition: fill .2s;
    }

    body.dark .calendar__head {
        border-color: #272B30;
    }

    .calendar__head:hover {
        border-color: #2A85FF;
    }

    body.dark .calendar__head:hover {
        border-color: #2A85FF;
    }

    .calendar__category {
        font-size: 12px;
        font-weight: 500;
        line-height: 1;
        color: #6F767E;
    }

    .calendar__value {
        width: 100%;
        height: 24px;
        background: none;
        border: none;
        box-shadow: none;
        pointer-events: none;
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        font-weight: 600;
        color: #1A1D1F;
    }

    body.dark .calendar__value {
        color: #FCFCFC;
    }

    .calendar__body {
        position: absolute;
        top: 0;
        left: calc(100% + 8px);
        background: #FCFCFC;
        box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.05), 0px 32px 48px -8px rgba(0, 0, 0, 0.1);
        border-radius: 16px;
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    @media only screen and (max-width: 1259px) {
        .calendar__body {
            top: 100%;
            left: 0;
            right: 0;
            z-index: 3;
        }
    }

    @media only screen and (max-width: 767px) {
        .calendar__body {
            top: 50%;
            left: 12px;
            right: 12px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }
    }

    body.dark .calendar__body {
        background: #1A1D1F;
    }

    @media only screen and (max-width: 767px) {
        body.dark .calendar__body {
            box-shadow: inset 0 0 0 1px #272B30;
        }
    }

    .calendar__item_date .calendar__body {
        padding: 10px 0 24px;
        text-align: center;
    }

    .calendar__item_time .calendar__body {
        width: 280px;
        padding: 24px;
    }

    @media only screen and (max-width: 1259px) {
        .calendar__item_time .calendar__body {
            width: auto;
        }
    }

    .calendar__date {
        padding: 24px 12px;
    }

    @media only screen and (max-width: 1259px) {
        .calendar__date {
            width: 100%;
            text-align: center;
        }
    }

    .calendar__time {
        max-height: 360px;
        overflow: auto;
    }

    @media only screen and (max-width: 1259px) {
        .calendar__time {
            max-height: 240px;
        }
    }

    @media only screen and (max-width: 767px) {
        .calendar__time {
            max-height: 360px;
        }
    }

    .calendar__time li {
        padding: 0 12px;
        border-radius: 4px;
        line-height: 40px;
        color: #6F767E;
        cursor: pointer;
        transition: all .2s;
    }

    .calendar__time li:hover,
    .calendar__time li.active {
        background: #EFEFEF;
        color: #1A1D1F;
    }

    body.dark .calendar__time li:hover,
    body.dark .calendar__time li.active {
        background: #272B30;
        color: #FCFCFC;
    }

    .calendar__foot {
        margin: 6px 20px 0;
        padding-top: 16px;
        border-top: 1px solid #EFEFEF;
        text-align: right;
    }

    body.dark .calendar__foot {
        border-color: #272B30;
    }

    .calendar__foot .calendar__button:not(:last-child) {
        margin-right: 8px;
    }

    .calendar__top {
        display: flex;
        align-items: center;
        margin-bottom: 24px;
        padding-bottom: 23px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .calendar__top {
        border-color: #272B30;
    }

    .calendar__subtitle {
        margin-right: auto;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .calendar__subtitle {
            font-size: 18px;
        }
    }

    .calendar__close {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #EFEFEF;
        font-size: 0;
    }

    .calendar__close .icon {
        width: 20px;
        height: 20px;
        fill: #33383F;
        transition: -webkit-transform .2s;
        transition: transform .2s;
        transition: transform .2s, -webkit-transform .2s;
    }

    body.dark .calendar__close {
        background: #272B30;
    }

    body.dark .calendar__close .icon {
        fill: #FCFCFC;
    }

    .calendar__close:hover .icon {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .calendar__btns {
        margin-top: 24px;
        text-align: right;
    }

    .date-picker-wrapper {
        padding: 0;
        border: none;
        border-radius: 24px;
        box-shadow: 0px 40px 32px -24px rgba(15, 15, 15, 0.12);
        background: none;
        z-index: 20;
        overflow: hidden;
        font-family: 'Inter', sans-serif;
    }

    @media only screen and (max-width: 767px) {
        .date-picker-wrapper {
            width: 262px !important;
            padding: 0 19px;
        }
    }

    body.dark .date-picker-wrapper {
        background: none;
    }

    .date-picker-wrapper.single-month .month-wrapper {
        width: 252px !important;
        padding: 0 19px;
    }

    @media only screen and (max-width: 767px) {
        .date-picker-wrapper.single-month .month-wrapper {
            margin: 0 5px;
            padding: 0;
        }
    }

    .date-picker-wrapper.single-month .month-wrapper table {
        width: 100% !important;
    }

    @media only screen and (min-width: 768px) {
        .date-picker-wrapper.two-months .month-wrapper {
            display: flex;
            width: 600px !important;
        }

        .date-picker-wrapper.two-months .month-wrapper table {
            flex: 0 0 calc(50% - 48px);
            width: calc(50% - 48px);
            margin: 0 24px;
        }
    }

    .date-picker-wrapper.single-date .day {
        border-radius: 50% !important;
    }

    .date-picker-wrapper.single-date .day.first-date-selected:before,
    .date-picker-wrapper.single-date .day.last-date-selected:before {
        display: none;
    }

    .date-picker-wrapper .month-wrapper {
        background: none;
        border: none;
        box-shadow: none;
    }

    .date-picker-wrapper .month-wrapper table {
        display: block;
    }

    @media only screen and (max-width: 767px) {
        .date-picker-wrapper .month-wrapper table {
            width: 100%;
        }
    }

    .date-picker-wrapper .month-wrapper table thead,
    .date-picker-wrapper .month-wrapper table tbody {
        display: block;
        width: 100%;
    }

    .date-picker-wrapper .month-wrapper table tr {
        display: flex;
        align-items: center;
        height: 36px;
    }

    .date-picker-wrapper .month-wrapper table th,
    .date-picker-wrapper .month-wrapper table td {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        flex: 1;
        font-weight: 500;
    }

    .date-picker-wrapper .month-wrapper table thead tr:first-child {
        height: 36px;
    }

    .date-picker-wrapper .month-wrapper table thead tr:first-child th:first-child,
    .date-picker-wrapper .month-wrapper table thead tr:first-child th:nth-child(3) {
        flex: 0 0 24px;
    }

    .date-picker-wrapper .month-wrapper table .week-name,
    .date-picker-wrapper .month-wrapper table .caption {
        height: auto;
    }

    .date-picker-wrapper .month-wrapper table .week-name {
        height: 40px;
    }

    .date-picker-wrapper .month-wrapper table .week-name th {
        height: auto;
    }

    .date-picker-wrapper .month-wrapper table .day {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        padding: 0;
        transition: background .2s, color .2s;
    }

    .date-picker-wrapper .month-wrapper table .day.valid.toMonth {
        color: #1A1D1F;
    }

    body.dark .date-picker-wrapper .month-wrapper table .day.valid.toMonth {
        color: #FCFCFC;
    }

    .date-picker-wrapper .month-wrapper table .day:hover {
        background: #6F767E;
        color: #F4F4F4 !important;
    }

    body.dark .date-picker-wrapper .month-wrapper table .day:hover {
        background: #FCFCFC;
        color: #111315 !important;
    }

    .date-picker-wrapper .month-wrapper table .day.checked {
        background: #272B30;
        border-radius: 0;
    }

    body.dark .date-picker-wrapper .month-wrapper table .day.checked {
        background: #FCFCFC;
        color: #111315 !important;
    }

    .date-picker-wrapper .month-wrapper table .day.hovering {
        border-radius: 0;
        background: #EFEFEF !important;
        color: #1A1D1F !important;
    }

    body.dark .date-picker-wrapper .month-wrapper table .day.hovering {
        background: #FCFCFC !important;
        color: #111315 !important;
    }

    .date-picker-wrapper .month-wrapper table .day.real-today {
        background: #2A85FF !important;
        color: #FCFCFC !important;
    }

    body.dark .date-picker-wrapper .month-wrapper table .day.real-today {
        background: #2A85FF !important;
        color: #111315 !important;
    }

    .date-picker-wrapper .month-wrapper table .day.day.real-today.checked,
    .date-picker-wrapper .month-wrapper table .day.day.real-today.hovering {
        background: #2A85FF;
    }

    .date-picker-wrapper .month-wrapper table .day.first-date-selected,
    .date-picker-wrapper .month-wrapper table .day.last-date-selected {
        position: relative;
        border-radius: 50% !important;
        background: #1A1D1F !important;
        color: #FCFCFC !important;
    }

    body.dark .date-picker-wrapper .month-wrapper table .day.first-date-selected,
    body.dark .date-picker-wrapper .month-wrapper table .day.last-date-selected {
        background: #272B30 !important;
        color: #F4F4F4 !important;
    }

    .date-picker-wrapper .month-wrapper table .day.first-date-selected:before,
    .date-picker-wrapper .month-wrapper table .day.last-date-selected:before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: -1;
        width: 50%;
        background: #272B30;
    }

    body.dark .date-picker-wrapper .month-wrapper table .day.first-date-selected:before,
    body.dark .date-picker-wrapper .month-wrapper table .day.last-date-selected:before {
        background: #FCFCFC;
    }

    .date-picker-wrapper .month-wrapper table .day.first-date-selected:before {
        right: 0;
    }

    .date-picker-wrapper .month-wrapper table .day.last-date-selected:before {
        left: 0;
    }

    .date-picker-wrapper .month-name {
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
        text-transform: capitalize;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 767px) {
        .date-picker-wrapper .month-name {
            font-size: 18px;
        }
    }

    body.dark .date-picker-wrapper .month-name {
        color: #FCFCFC;
    }

    .date-picker-wrapper .month-element:not(:last-child) {
        margin-right: 5px;
    }

    .date-picker-wrapper .week-name {
        font-size: 14px;
        color: #6F767E;
    }

    .date-picker-wrapper .week-name th {
        font-weight: 500;
        text-transform: capitalize;
    }

    .date-picker-wrapper .gap {
        display: none;
    }

    .date-picker-wrapper table .caption .next:hover,
    .date-picker-wrapper table .caption .prev:hover {
        background: none;
    }

    .date-picker-wrapper table .caption .next:hover path,
    .date-picker-wrapper table .caption .prev:hover path {
        fill: #2A85FF;
    }

    .date-picker-wrapper .footer {
        display: none;
    }

    .released__wrapper {
        margin: 0 -12px;
    }

    @media only screen and (max-width: 1023px) {
        .released__wrapper {
            margin: 0;
        }
    }

    .released__table {
        display: table;
        width: 100%;
    }

    @media only screen and (max-width: 1023px) {
        .released__table {
            display: block;
        }
    }

    .released__row {
        display: table-row;
    }

    @media only screen and (max-width: 1023px) {
        .released__row:first-child {
            display: none;
        }
    }

    .released__row:first-child .released__col {
        padding: 0 12px 16px;
        vertical-align: middle;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .released__row:not(:first-child) {
        transition: background .2s;
    }

    @media only screen and (max-width: 1023px) {
        .released__row:not(:first-child) {
            position: relative;
            display: block;
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .released__row:not(:first-child) {
            border-color: #272B30;
        }
    }

    @media only screen and (min-width: 1024px) {
        .released__row:not(:first-child):hover {
            background: #F4F4F4;
        }

        body.dark .released__row:not(:first-child):hover {
            background: #272B30;
        }

        .released__row:not(:first-child):hover .number,
        .released__row:not(:first-child):hover .status {
            background: #FCFCFC;
        }

        body.dark .released__row:not(:first-child):hover .number,
        body.dark .released__row:not(:first-child):hover .status {
            background: #33383F;
        }
    }

    .released__row:not(:first-child) .released__col:not(:first-child):not(:nth-child(2)) {
        padding-top: 20px;
    }

    @media only screen and (max-width: 1023px) {
        .released__row:not(:first-child) .released__col:not(:first-child):not(:nth-child(2)) {
            padding-top: 0;
        }
    }

    @media only screen and (max-width: 1023px) {
        .released__row:last-child .released__col {
            padding-bottom: 0;
        }

        .released__row:last-child .released__col:after {
            display: none;
        }
    }

    .released__col {
        position: relative;
        display: table-cell;
        vertical-align: top;
        padding: 16px 12px;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 1023px) {
        .released__col {
            position: static;
            display: flex;
            align-items: center;
            padding: 0;
        }
    }

    body.dark .released__col {
        color: #FCFCFC;
    }

    .released__col:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 1px;
        background: #EFEFEF;
    }

    @media only screen and (max-width: 1023px) {
        .released__col:after {
            display: none;
        }
    }

    body.dark .released__col:after {
        background: #272B30;
    }

    .released__col:first-child {
        width: 56px;
        border-radius: 8px 0 0 8px;
        font-size: 0;
    }

    @media only screen and (max-width: 1023px) {
        .released__col:first-child {
            display: none;
        }
    }

    .released__col:first-child:after {
        left: 12px;
    }

    @media only screen and (max-width: 1023px) {
        .released__col:nth-child(3) {
            display: none;
        }
    }

    .released__col:last-child {
        border-radius: 0 8px 8px 0;
    }

    .released__col:last-child:after {
        right: 12px;
    }

    @media only screen and (max-width: 1023px) {
        .released__col:not(:first-child):not(:last-child) {
            margin-bottom: 12px;
        }
    }

    .released__item {
        display: flex;
        align-items: center;
        cursor: pointer;
        color: #1A1D1F;
        transition: color .2s;
    }

    @media only screen and (max-width: 767px) {
        .released__item {
            align-items: stretch;
        }
    }

    body.dark .released__item {
        color: #FCFCFC;
    }

    .released__item:hover {
        color: #2A85FF;
    }

    body.dark .released__item:hover {
        color: #2A85FF;
    }

    .released__preview {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    @media only screen and (max-width: 1023px) {
        .released__preview {
            width: 104px;
        }
    }

    .released__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .released__product {
        max-width: 170px;
        margin-bottom: 4px;
    }

    @media only screen and (max-width: 1023px) {
        .released__product {
            max-width: 100%;
            margin-bottom: 8px;
            font-size: 18px;
            line-height: 1.33333;
            letter-spacing: -0.02em;
        }
    }

    @media only screen and (max-width: 1023px) {
        .released__wrap {
            display: flex;
            align-items: center;
        }
    }

    .released__category {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        .released__category {
            font-size: 15px;
        }
    }

    .released__sales {
        display: inline-flex;
        align-items: center;
    }

    .released__number,
    .released__price {
        display: inline-block;
        padding: 0 8px;
        border-radius: 6px;
        background: #EFEFEF;
        transition: background .2s;
    }

    body.dark .released__number,
    body.dark .released__price {
        background: #33383F;
    }

    .released__price {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .released__price {
            display: inline-block;
            margin-right: 12px;
        }
    }

    .released__status {
        transition: background .2s;
    }

    .released__rating {
        display: flex;
        align-items: center;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    .released__rating .icon {
        width: 24px;
        height: 24px;
        margin-right: 8px;
        fill: #FFC554;
    }

    .released__rating_empty {
        white-space: nowrap;
        color: #6F767E;
    }

    .released__rating_empty .icon {
        fill: #6F767E;
    }

    .released__counter {
        margin-left: 4px;
        color: #6F767E;
    }

    .released .balance {
        margin-left: 8px;
    }

    .released__box {
        display: flex;
        align-items: center;
    }

    .released__line {
        position: relative;
        flex-shrink: 0;
        width: 44px;
        height: 12px;
        margin-left: 8px;
    }

    .released__progress {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        border-radius: 2px;
        background: #2A85FF;
    }

    .released__label {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .released__label {
            display: block;
            flex-shrink: 0;
            width: 124px;
            padding-right: 20px;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.23077;
            color: #6F767E;
        }
    }

    .released__foot {
        margin-top: 32px;
        text-align: center;
    }

    @media only screen and (max-width: 1023px) {
        .released__foot {
            margin-top: 24px;
        }
    }

    .released__foot .released__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    .recall .card__head {
        margin-bottom: 44px;
    }

    @media only screen and (max-width: 1023px) {
        .recall .card__head {
            margin-bottom: 32px;
        }
    }

    @media only screen and (max-width: 767px) {
        .recall .card__head {
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .recall .form {
            width: 320px;
        }
    }

    @media only screen and (max-width: 767px) {
        .recall .form {
            width: 100%;
        }
    }

    .recall .card__title {
        margin-right: 24px;
    }

    @media only screen and (max-width: 1023px) {
        .recall .card__title {
            margin-right: auto;
        }
    }

    @media only screen and (max-width: 767px) {
        .recall .card__title {
            margin: 0 0 16px;
        }
    }

    .recall__wrapper {
        margin: 0 -12px;
    }

    @media only screen and (max-width: 1023px) {
        .recall__wrapper {
            margin: 0;
        }
    }

    .recall__row {
        position: relative;
        display: flex;
    }

    .recall__row:after {
        content: "";
        position: absolute;
        left: 12px;
        bottom: 0;
        right: 12px;
        height: 1px;
        background: #EFEFEF;
    }

    @media only screen and (max-width: 1023px) {
        .recall__row:after {
            display: none;
        }
    }

    body.dark .recall__row:after {
        background: #272B30;
    }

    .recall__row:first-child {
        align-items: center;
        padding: 0 12px 16px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        .recall__row:first-child {
            display: none;
        }
    }

    .recall__row:not(:first-child) {
        padding: 16px 12px;
        border-radius: 8px;
        transition: background .2s;
    }

    @media only screen and (max-width: 1023px) {
        .recall__row:not(:first-child) {
            display: block;
            margin-bottom: 16px;
            padding: 0 0 16px;
            border-radius: 0;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .recall__row:not(:first-child) {
            border-color: #272B30;
        }
    }

    @media only screen and (min-width: 1260px) {
        .recall__row:not(:first-child):hover {
            background: #EFEFEF;
        }

        body.dark .recall__row:not(:first-child):hover {
            background: #272B30;
        }

        .recall__row:not(:first-child):hover .recall__control {
            visibility: visible;
            opacity: 1;
        }
    }

    .recall__row:not(:first-child).active .recall__control {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .recall__row:not(:first-child).active .recall__control {
            display: flex;
        }
    }

    .recall__row:not(:first-child).active .answer {
        display: block !important;
    }

    @media only screen and (min-width: 1024px) {
        .recall__row:not(:first-child).active {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.05);
            background: #FFFFFF;
        }

        body.dark .recall__row:not(:first-child).active {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            background: #272B30;
        }
    }

    .recall__col:first-child {
        flex-shrink: 0;
        width: 24px;
        font-size: 0;
    }

    @media only screen and (max-width: 1023px) {
        .recall__col:first-child {
            display: none;
        }
    }

    .recall__col:nth-child(2) {
        flex-grow: 1;
        padding: 0 32px;
    }

    @media only screen and (max-width: 1023px) {
        .recall__col:nth-child(2) {
            padding: 0;
        }
    }

    .recall__col:last-child {
        flex-shrink: 0;
        width: 268px;
    }

    @media only screen and (max-width: 1023px) {
        .recall__col:last-child {
            display: none;
        }
    }

    .recall__item {
        display: flex;
        align-items: center;
    }

    .recall__preview {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 20px;
    }

    .recall__preview img {
        width: 100%;
        height: 100%;
        border-radius: 8px;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .recall__product {
        margin-bottom: 4px;
        font-weight: 700;
        color: #1A1D1F;
    }

    body.dark .recall__product {
        color: #FCFCFC;
    }

    .recall__category {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .recall__box {
        display: flex;
    }

    .recall__avatar {
        position: relative;
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        margin-right: 20px;
    }

    @media only screen and (max-width: 767px) {
        .recall__avatar {
            margin-right: 12px;
        }
    }

    .recall__avatar>img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .recall__details {
        flex-grow: 1;
    }

    .recall__line {
        display: flex;
        align-items: center;
        margin-bottom: 4px;
    }

    .recall__author {
        margin-right: auto;
        font-weight: 700;
    }

    .recall__time {
        margin-left: 24px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .recall__content {
        color: #33383F;
    }

    body.dark .recall__content {
        color: #FCFCFC;
    }

    .recall__control {
        display: flex;
        align-items: center;
        margin: 12px 0 -4px;
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    @media only screen and (max-width: 1259px) {
        .recall__control {
            visibility: visible;
            opacity: 1;
        }
    }

    .recall__button {
        flex-shrink: 0;
    }

    .recall__button .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .recall__button:hover .icon {
        fill: #2A85FF;
    }

    .recall__button.active .icon {
        fill: #1A1D1F;
    }

    body.dark .recall__button.active .icon {
        fill: #FCFCFC;
    }

    .recall .favorite .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
    }

    .recall .favorite:hover .icon {
        fill: #2A85FF;
    }

    .recall .favorite.active .icon {
        fill: #2A85FF;
    }

    body.dark .recall .favorite.active .icon {
        fill: #2A85FF;
    }

    .recall__button:not(:last-child),
    .recall .favorite:not(:last-child) {
        margin-right: 32px;
    }

    .recall__foot {
        margin-top: 24px;
        text-align: center;
    }

    @media only screen and (max-width: 1023px) {
        .recall__foot {
            margin-top: 0;
        }
    }

    .recall__foot .recall__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    .smile {
        display: inline-block;
        position: relative;
    }

    .smile__head .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .smile__head:hover .icon {
        fill: #2A85FF;
    }

    .smile__body {
        position: absolute;
        width: 264px;
        padding: 4px;
        border-radius: 8px;
        background: #FFFFFF;
        box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.05), 0px 32px 48px -8px rgba(0, 0, 0, 0.1);
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    @media only screen and (max-width: 767px) {
        .smile__body {
            max-width: 168px;
        }
    }

    body.dark .smile__body {
        background: #1A1D1F;
        box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.05), 0px 32px 48px -8px rgba(0, 0, 0, 0.3);
    }

    .smile__list {
        display: flex;
        flex-wrap: wrap;
    }

    .smile__item {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        transition: background .2s;
    }

    .smile__item img {
        width: 100%;
    }

    .smile__item:hover {
        background: #EFEFEF;
    }

    body.dark .smile__item:hover {
        background: #272B30;
    }

    .smile.active .smile__head .icon {
        fill: #1A1D1F;
    }

    body.dark .smile.active .smile__head .icon {
        fill: #FCFCFC;
    }

    .smile.active .smile__body {
        visibility: visible;
        opacity: 1;
    }

    .smile_right .smile__body {
        top: 50%;
        left: calc(100% + 10px);
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    @media only screen and (max-width: 767px) {
        .smile_right .smile__body {
            top: auto;
            left: 50%;
            bottom: calc(100% + 10px);
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }
    }

    .smile_up .smile__body {
        left: 50%;
        bottom: calc(100% + 10px);
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    @media only screen and (max-width: 767px) {
        .total .card__head {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .total .card__title {
            margin-bottom: 16px;
        }
    }

    .total__details {
        margin-bottom: 32px;
    }

    @media only screen and (max-width: 767px) {
        .total__details {
            margin-bottom: 24px;
            text-align: center;
        }
    }

    .total__title {
        margin-bottom: 4px;
    }

    .total__line {
        display: flex;
        align-items: center;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 700;
        color: #9A9FA5;
    }

    @media only screen and (max-width: 767px) {
        .total__line {
            justify-content: center;
        }
    }

    .total .balance {
        margin-right: 4px;
    }

    .total__chart {
        width: auto;
        height: 238px;
        margin: 0 0 -10px -10px;
    }

    .total .users {
        margin-top: 32px;
        padding-top: 32px;
        border-top: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .total .users {
            margin-top: 24px;
            padding-top: 24px;
        }
    }

    body.dark .total .users {
        border-color: #272B30;
    }

    @media only screen and (max-width: 767px) {
        .promote .card__head .button {
            display: none;
        }
    }

    .promote__list {
        display: flex;
        flex-wrap: wrap;
        margin: -32px -16px 0;
    }

    @media only screen and (max-width: 767px) {
        .promote__list {
            display: block;
            margin: 0;
        }
    }

    .promote .summary {
        flex: 0 0 calc(50% - 32px);
        width: calc(50% - 32px);
        margin: 32px 16px 0;
    }

    @media only screen and (max-width: 767px) {
        .promote .summary {
            width: 100%;
            margin: 0;
        }

        .promote .summary:not(:last-child) {
            margin-bottom: 24px;
        }
    }

    .promote .media {
        margin: 32px 0 16px;
        padding-top: 32px;
        border-top: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .promote .media {
            margin-top: 24px;
            padding-top: 24px;
        }
    }

    body.dark .promote .media {
        border-color: #272B30;
    }

    .device__chart {
        width: auto;
        height: 230px;
    }

    @media only screen and (max-width: 1023px) {
        .device__chart {
            max-width: 310px;
            margin: 0 auto;
        }
    }

    .device__legend {
        display: flex;
        justify-content: space-between;
        margin-top: 32px;
    }

    .device__legend .icon {
        width: 24px;
        height: 24px;
        margin-bottom: 12px;
    }

    .device__indicator_mobile .icon {
        fill: #8E59FF;
    }

    .device__indicator_tablet .icon {
        fill: #83BF6E;
    }

    .device__indicator_desktop .icon {
        fill: #2A85FF;
    }

    .device__title {
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #6F767E;
    }

    .device__percent {
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .device__percent {
            font-size: 18px;
        }
    }

    .message__item {
        display: flex;
    }

    .message__item:not(:last-child) {
        margin-bottom: 32px;
        padding-bottom: 24px;
        border-bottom: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .message__item:not(:last-child) {
            margin-bottom: 24px;
        }
    }

    body.dark .message__item:not(:last-child) {
        border-color: #272B30;
    }

    .message__avatar {
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        margin-right: 12px;
    }

    .message__avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .message__details {
        flex-grow: 1;
    }

    .message__line {
        display: flex;
        align-items: center;
    }

    .message__user {
        margin-right: auto;
    }

    .message__title {
        font-weight: 700;
    }

    .message__login {
        font-weight: 500;
        color: #9A9FA5;
    }

    .message__time {
        margin-left: 20px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .message__content {
        font-weight: 500;
        color: #1A1D1F;
    }

    body.dark .message__content {
        color: #FCFCFC;
    }

    .message__button {
        width: 100%;
        margin-top: 32px;
    }

    .customer .card__head {
        margin-bottom: 44px;
    }

    @media only screen and (max-width: 1023px) {
        .customer .card__head {
            margin-bottom: 32px;
        }
    }

    @media only screen and (max-width: 767px) {
        .customer .card__head {
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
    }

    .customer .card__head .form {
        margin-right: auto;
    }

    @media only screen and (max-width: 1023px) {
        .customer .card__head .form {
            width: 250px;
        }
    }

    @media only screen and (max-width: 767px) {
        .customer .card__head .form {
            width: 100%;
            margin: 0 0 16px;
        }
    }

    .customer .card__title {
        margin-right: 24px;
    }

    @media only screen and (max-width: 767px) {
        .customer .card__title {
            margin: 0 0 16px;
        }
    }

    .customer .filters {
        margin-left: 8px;
    }

    @media only screen and (max-width: 1023px) {
        .customer .filters {
            display: none;
        }
    }

    .customer__details {
        display: none;
    }

    .customer__wrapper {
        margin: 0 -12px;
    }

    @media only screen and (max-width: 1023px) {
        .customer__wrapper {
            margin: 0;
        }
    }

    .customer__table {
        display: table;
        width: 100%;
    }

    @media only screen and (max-width: 1023px) {
        .customer__table {
            display: block;
        }
    }

    .customer__row {
        display: table-row;
    }

    @media only screen and (max-width: 1023px) {
        .customer__row:first-child {
            display: none;
        }
    }

    .customer__row:first-child .customer__col {
        padding: 0 12px 16px;
        vertical-align: middle;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .customer__row:not(:first-child) {
        transition: all .2s;
    }

    @media only screen and (max-width: 1023px) {
        .customer__row:not(:first-child) {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid #EFEFEF;
        }
    }

    body.dark .customer__row:not(:first-child) {
        border-color: #272B30;
    }

    @media only screen and (min-width: 1024px) {
        .customer__row:not(:first-child):hover {
            background: #F4F4F4;
        }

        body.dark .customer__row:not(:first-child):hover {
            background: #272B30;
        }

        .customer__row:not(:first-child):hover .price {
            background: #FCFCFC;
        }

        body.dark .customer__row:not(:first-child):hover .price {
            background: #111315;
        }
    }

    .customer__row:last-child .customer__col:after {
        display: none;
    }

    .customer__row.active {
        background: #EFEFEF !important;
    }

    body.dark .customer__row.active {
        background: #272B30 !important;
        box-shadow: inset 0px -2px 1px rgba(0, 0, 0, 0.05), inset 0px 1px 1px rgba(255, 255, 255, 0.08);
    }

    .customer__row.active .customer__col:first-child {
        border-radius: 12px 0 0 12px;
    }

    .customer__row.active .customer__col:nth-child(2) {
        padding-right: 40px;
        border-radius: 0 12px 12px 0;
    }

    .customer__row.active .customer__col:nth-child(2):before {
        content: "";
        position: absolute;
        top: 50%;
        right: 12px;
        width: 24px;
        height: 24px;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'%3E%3Cpath d='M8.293 17.293a1 1 0 0 0 1.414 1.414l-1.414-1.414zM15 12l.707.707a1 1 0 0 0 0-1.414L15 12zM9.707 5.293a1 1 0 1 0-1.414 1.414l1.414-1.414zm0 13.414l6-6-1.414-1.414-6 6 1.414 1.414zm6-7.414l-6-6-1.414 1.414 6 6 1.414-1.414z' fill='%236f767e'/%3E%3C/svg%3E") no-repeat 50% 50%/100% auto;
    }

    .customer__col {
        position: relative;
        display: table-cell;
        vertical-align: top;
        padding: 16px 12px;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 1023px) {
        .customer__col {
            display: block;
            padding: 0;
        }
    }

    body.dark .customer__col {
        color: #FCFCFC;
    }

    .customer__col:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 1px;
        background: #EFEFEF;
    }

    @media only screen and (max-width: 1023px) {
        .customer__col:after {
            display: none;
        }
    }

    body.dark .customer__col:after {
        background: #272B30;
    }

    .customer__col:first-child {
        width: 56px;
        border-radius: 8px 0 0 8px;
        font-size: 0;
    }

    @media only screen and (max-width: 1023px) {
        .customer__col:first-child {
            display: none;
        }
    }

    .customer__col:first-child:after {
        left: 12px;
    }

    @media only screen and (max-width: 1023px) {
        .customer__col:nth-child(5) {
            margin-left: auto;
            padding-left: 16px;
        }
    }

    @media only screen and (max-width: 1023px) {

        .customer__col:nth-child(3),
        .customer__col:nth-child(4),
        .customer__col:nth-child(6),
        .customer__col:nth-child(7) {
            display: none;
        }
    }

    .customer__col:last-child {
        border-radius: 0 8px 8px 0;
    }

    .customer__col:last-child:after {
        right: 12px;
    }

    .customer__item {
        display: flex;
        align-items: center;
        cursor: pointer;
        transition: color .2s;
    }

    .customer__item:hover {
        color: #2A85FF;
    }

    .customer__item .customer__email {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .customer__item .customer__email {
            display: block;
            font-size: 13px;
            line-height: 1;
            color: #9A9FA5;
        }
    }

    .customer__avatar {
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        margin-right: 12px;
        border-radius: 50%;
        overflow: hidden;
    }

    .customer__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .customer__user {
        max-width: 160px;
        margin-bottom: 4px;
    }

    .customer__login {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        .customer__login {
            display: none;
        }
    }

    body.dark .customer__login {
        color: #9A9FA5;
    }

    .customer__email {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        .customer__col>.customer__email {
            display: none;
        }
    }

    .customer__lifetime {
        display: inline-flex;
        align-items: center;
    }

    @media only screen and (max-width: 767px) {
        .customer__lifetime {
            flex-direction: column;
            align-items: flex-end;
        }
    }

    .customer__price {
        display: inline-block;
        padding: 0 8px;
        border-radius: 6px;
        background: #EFEFEF;
        transition: backround .2s;
    }

    body.dark .customer__price {
        background: #272B30;
    }

    .customer .balance {
        margin-left: 8px;
    }

    @media only screen and (max-width: 767px) {
        .customer .balance {
            margin: 4px 0 0;
        }
    }

    .customer__foot {
        margin-top: 32px;
        text-align: center;
    }

    @media only screen and (max-width: 1023px) {
        .customer__foot {
            margin-top: 24px;
        }
    }

    .customer__foot .customer__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    @media only screen and (max-width: 1023px) {
        .customer.active .card__head {
            display: none;
        }
    }

    .customer.active .customer__inner {
        display: flex;
    }

    .customer.active .customer__container {
        flex-shrink: 0;
        width: 360px;
    }

    @media only screen and (max-width: 1419px) {
        .customer.active .customer__container {
            width: 350px;
        }
    }

    @media only screen and (max-width: 1259px) {
        .customer.active .customer__container {
            width: 320px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .customer.active .customer__container {
            display: none;
        }
    }

    .customer.active .customer__row:hover {
        background: none;
    }

    body.dark .customer.active .customer__row:hover {
        background: none;
    }

    .customer.active .customer__col:not(:first-child):not(:nth-child(2)) {
        display: none;
    }

    .customer.active .customer__col:nth-child(2):after {
        right: 12px;
    }

    .customer.active .customer__details {
        display: block;
    }

    .filters {
        position: relative;
    }

    .filters__head .icon {
        width: 24px;
        height: 24px;
    }

    .filters__body {
        position: absolute;
        top: -24px;
        right: -24px;
        z-index: 30;
        width: 408px;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.05), 0px 32px 48px -8px rgba(0, 0, 0, 0.1);
        background: #FCFCFC;
        visibility: hidden;
        opacity: 0;
        transition: all .3s;
    }

    @media only screen and (max-width: 767px) {
        .filters__body {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            width: auto;
            overflow: auto;
        }
    }

    body.dark .filters__body {
        background: #1A1D1F;
    }

    .filters__top {
        display: flex;
        align-items: center;
        margin-bottom: 24px;
    }

    .filters__title {
        margin-right: auto;
    }

    .filters__close {
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #EFEFEF;
        margin-left: 24px;
    }

    .filters__close .icon {
        width: 20px;
        height: 20px;
        fill: #1A1D1F;
        transition: -webkit-transform .2s;
        transition: transform .2s;
        transition: transform .2s, -webkit-transform .2s;
    }

    body.dark .filters__close {
        background: #272B30;
    }

    body.dark .filters__close .icon {
        fill: #FCFCFC;
    }

    .filters__close:hover .icon {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .filters .form {
        width: 100%;
        margin-bottom: 24px;
    }

    .filters__item:not(:last-child) {
        margin-bottom: 24px;
    }

    .filters__label,
    .filters .field__label {
        margin-bottom: 12px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #6F767E;
    }

    .filters .checkbox:not(:last-child) {
        margin-bottom: 12px;
    }

    .filters__range {
        margin: 20px 0;
    }

    .filters__box {
        position: relative;
    }

    .filters__box .select {
        padding-left: 48px;
    }

    .filters__box .icon {
        position: absolute;
        left: 12px;
        bottom: 12px;
        z-index: 10;
        pointer-events: none;
        width: 24px;
        height: 24px;
        fill: #FFD88D;
    }

    .filters__btns {
        display: flex;
        justify-content: flex-end;
        margin-top: 24px;
    }

    .filters__btns .filters__button:not(:last-child) {
        margin-right: 12px;
    }

    .filters__overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 28;
        background: rgba(244, 244, 244, 0.8);
        visibility: hidden;
        opacity: 0;
        transition: all .2s;
    }

    body.dark .filters__overlay {
        background: rgba(39, 43, 48, 0.9);
    }

    .filters.active .filters__body,
    .filters.active .filters__overlay {
        visibility: visible;
        opacity: 1;
    }

    .details {
        position: relative;
        flex-grow: 1;
        padding: 60px 0 0 48px;
    }

    @media only screen and (max-width: 1419px) {
        .details {
            padding: 48px 0 0 48px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .details {
            padding: 0;
        }
    }

    .details__close {
        position: absolute;
        top: 0;
        right: 0;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #EFEFEF;
    }

    @media only screen and (max-width: 1023px) {
        .details__close {
            top: -90px;
            background: #FCFCFC;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.05);
        }
    }

    @media only screen and (max-width: 767px) {
        .details__close {
            top: -70px;
        }
    }

    .details__close .icon {
        width: 20px;
        height: 20px;
        transition: -webkit-transform .2s;
        transition: transform .2s;
        transition: transform .2s, -webkit-transform .2s;
    }

    body.dark .details__close {
        background: #272B30;
    }

    body.dark .details__close .icon {
        fill: #FCFCFC;
    }

    .details__close:hover .icon {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .details__head,
    .details .editor {
        margin-bottom: 48px;
    }

    @media only screen and (max-width: 1339px) {

        .details__head,
        .details .editor {
            margin-bottom: 32px;
        }
    }

    .details__head {
        display: flex;
        align-items: center;
    }

    @media only screen and (max-width: 767px) {
        .details__head {
            display: block;
        }
    }

    .details__user {
        display: flex;
        align-items: center;
        margin-right: 24px;
    }

    @media only screen and (max-width: 767px) {
        .details__user {
            margin: 0 0 24px;
        }
    }

    .details__avatar {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 24px;
    }

    @media only screen and (max-width: 1419px) {
        .details__avatar {
            width: 64px;
            height: 64px;
            margin-right: 16px;
        }
    }

    .details__avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .details__man {
        margin-bottom: 4px;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .details__man {
            font-size: 18px;
        }
    }

    .details__login {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .details__btns {
        display: flex;
        align-items: center;
        margin-left: auto;
    }

    .details__btns .details__button .icon {
        width: 24px;
        height: 24px;
    }

    @media only screen and (max-width: 767px) {
        .details__btns .details__button {
            flex-grow: 1;
        }
    }

    @media only screen and (max-width: 1419px) {
        .details__btns .details__button:first-child {
            width: 48px;
            padding: 0;
            font-size: 0;
        }

        .details__btns .details__button:first-child .icon:last-child {
            margin: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .details__btns .details__button:first-child {
            width: auto;
            padding: 0 20px;
            font-size: 15px;
        }

        .details__btns .details__button:first-child .icon:last-child {
            margin-left: 8px;
        }
    }

    .details__btns .details__button:not(:last-child) {
        margin-right: 8px;
    }

    .details__line {
        display: flex;
        align-items: center;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #1A1D1F;
        transition: color .2s;
    }

    .details__line .icon {
        width: 24px;
        height: 24px;
        margin-right: 12px;
        fill: #6F767E;
        transition: fill .2s;
    }

    body.dark .details__line {
        color: #FCFCFC;
    }

    .details__line:hover {
        color: #2A85FF;
    }

    .details__line:hover .icon {
        fill: #2A85FF;
    }

    .details__socials {
        display: flex;
        align-items: center;
        padding: 20px 0;
        border-width: 1px 0;
        border-style: solid;
        border-color: #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .details__socials {
            padding: 16px 0;
        }
    }

    body.dark .details__socials {
        border-color: #272B30;
    }

    .details__social .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .details__social:hover .icon {
        fill: #2A85FF;
    }

    .details__social:not(:last-child) {
        margin-right: 32px;
    }

    .details__line:not(:last-child),
    .details__socials:not(:last-child) {
        margin-bottom: 20px;
    }

    @media only screen and (max-width: 767px) {

        .details__line:not(:last-child),
        .details__socials:not(:last-child) {
            margin-bottom: 16px;
        }
    }

    .details .history {
        margin-top: 48px;
    }

    @media only screen and (max-width: 1339px) {
        .details .history {
            margin-top: 32px;
        }
    }

    .history__label {
        margin-bottom: 14px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #33383F;
    }

    body.dark .history__label {
        color: #EFEFEF;
    }

    .history .tooltip {
        position: relative;
        top: -1;
    }

    .history .tooltip .icon {
        fill: #9A9FA5;
    }

    .history__inner {
        margin: 0 -12px;
    }

    @media only screen and (max-width: 767px) {
        .history__inner {
            margin: 0;
        }
    }

    .history__table {
        display: table;
        width: 100%;
    }

    @media only screen and (max-width: 767px) {
        .history__table {
            display: block;
        }
    }

    .history__row {
        display: table-row;
        cursor: pointer;
        transition: background .2s;
    }

    @media only screen and (max-width: 767px) {
        .history__row {
            display: block;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .history__row {
            border-color: #272B30;
        }
    }

    @media only screen and (max-width: 767px) {
        .history__row:first-child {
            display: none;
        }
    }

    .history__row:first-child .history__col {
        padding-top: 0;
        padding-bottom: 24px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #6F767E;
    }

    @media only screen and (min-width: 768px) {
        .history__row:not(:first-child):hover {
            background: #F4F4F4;
        }

        body.dark .history__row:not(:first-child):hover {
            background: #272B30;
        }
    }

    .history__col {
        position: relative;
        display: table-cell;
        vertical-align: middle;
        padding: 12px;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 767px) {
        .history__col {
            display: block;
            padding: 0;
        }
    }

    body.dark .history__col {
        color: #FCFCFC;
    }

    .history__col:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 1px;
        background: #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .history__col:after {
            display: none;
        }
    }

    body.dark .history__col:after {
        background: #272B30;
    }

    .history__col:first-child {
        border-radius: 8px 0 0 8px;
    }

    .history__col:first-child:after {
        left: 12px;
    }

    @media only screen and (max-width: 767px) {
        .history__col:not(:first-child) {
            display: none;
        }
    }

    .history__col:last-child {
        border-radius: 0 8px 8px 0;
    }

    .history__col:last-child:after {
        right: 12px;
    }

    .history__item {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .history__item .history__price {
        display: none;
    }

    @media only screen and (max-width: 767px) {
        .history__item .history__price {
            display: inline-block;
            margin-top: 8px;
        }
    }

    .history__preview {
        flex-shrink: 0;
        width: 60px;
        height: 60px;
        margin-right: 16px;
        border-radius: 8px;
        overflow: hidden;
    }

    @media only screen and (max-width: 767px) {
        .history__preview {
            width: 104px;
            height: 112px;
            margin-right: 20px;
        }
    }

    .history__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .history__product {
        max-width: 200px;
        margin-bottom: 4px;
    }

    @media only screen and (max-width: 767px) {
        .history__product {
            max-width: 100%;
        }
    }

    .history__link {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .history__price {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 6px;
        background: #B5E4CA;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    body.dark .history__price {
        color: #1A1D1F;
    }

    .history__date {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #6F767E;
    }

    .history__foot {
        margin-top: 20px;
        text-align: center;
    }

    .history__foot .history__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    .quality__list {
        display: flex;
        justify-content: space-between;
    }

    @media only screen and (max-width: 767px) {
        .quality__list {
            display: block;
        }
    }

    .quality__item {
        display: block;
        padding: 0 32px 0 64px;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 1339px) {
        .quality__item {
            padding: 0 32px 0 32px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .quality__item {
            padding: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .quality__item {
            display: flex;
            flex-direction: row-reverse;
            width: 100%;
        }
    }

    body.dark .quality__item {
        color: #FCFCFC;
    }

    .quality__item:not(:first-child) {
        border-width: 0 0 0 1px;
        border-style: solid;
        border-color: #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .quality__item:not(:first-child) {
            margin-top: 24px;
            padding-top: 24px;
            border-width: 1px 0 0;
        }
    }

    body.dark .quality__item:not(:first-child) {
        border-color: #272B30;
    }

    .quality__item:first-child {
        padding-left: 0;
    }

    .quality__item:last-child {
        padding-right: 0;
    }

    .quality__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 48px;
        height: 48px;
        margin-bottom: 24px;
        border-radius: 50%;
    }

    @media only screen and (max-width: 767px) {
        .quality__icon {
            margin: 0 0 0 auto;
        }
    }

    .quality__icon .icon {
        width: 24px;
        height: 24px;
        fill: #1A1D1F;
    }

    .quality__label {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .quality .tooltip .icon {
        fill: #6F767E;
    }

    .quality__counter {
        min-width: 146px;
        margin-bottom: 8px;
        font-size: 48px;
        font-weight: 600;
        line-height: 1;
        letter-spacing: -.03em;
    }

    @media only screen and (max-width: 1023px) {
        .quality__counter {
            min-width: auto;
            font-size: 40px;
        }
    }

    @media only screen and (max-width: 767px) {
        .quality__counter {
            font-size: 48px;
        }
    }

    .quality__indicator {
        display: inline-flex;
        align-items: center;
        padding: 4px;
        color: #6F767E;
    }

    body.dark .quality__indicator {
        background: #272B30;
    }

    .quality__indicator span {
        margin-left: 4px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
    }

    .press .card__head {
        margin-bottom: 44px;
    }

    @media only screen and (max-width: 1023px) {
        .press .card__head {
            margin-bottom: 32px;
        }
    }

    @media only screen and (max-width: 767px) {
        .press .card__head {
            flex-wrap: wrap;
            margin-bottom: 24px;
        }

        .press .card__head .card__title {
            width: 100%;
            margin: 0 0 16px;
        }
    }

    .press .card__button {
        margin-left: 16px;
    }

    .press__table {
        display: table;
        width: 100%;
    }

    @media only screen and (max-width: 1023px) {
        .press__table {
            display: block;
        }
    }

    .press__row {
        display: table-row;
    }

    @media only screen and (max-width: 1023px) {
        .press__row:first-child {
            display: none;
        }
    }

    .press__row:first-child .press__col {
        padding-top: 16px;
        padding-bottom: 16px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        .press__row:not(:first-child) {
            display: block;
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .press__row:not(:first-child) {
            border-color: #272B30;
        }
    }

    .press__row:not(:first-child) .press__col:not(:first-child) {
        padding-top: 32px;
    }

    @media only screen and (max-width: 1023px) {
        .press__row:not(:first-child) .press__col:not(:first-child) {
            padding-top: 0;
        }
    }

    .press__row:not(:last-child) .press__col {
        border-bottom: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 1023px) {
        .press__row:not(:last-child) .press__col {
            border: none;
        }
    }

    body.dark .press__row:not(:last-child) .press__col {
        border-color: #272B30;
    }

    .press__col {
        display: table-cell;
        vertical-align: top;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    @media only screen and (max-width: 1023px) {
        .press__col {
            display: flex;
            align-items: center;
            padding: 0;
        }
    }

    .press__col:not(:last-child) {
        padding-right: 24px;
    }

    @media only screen and (max-width: 1023px) {
        .press__col:not(:last-child) {
            margin-bottom: 12px;
            padding-top: 0;
        }
    }

    .press__item {
        display: flex;
        align-items: center;
    }

    .press__preview {
        position: relative;
        flex-shrink: 0;
        width: 136px;
        height: 112px;
        margin-right: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    @media only screen and (max-width: 767px) {
        .press__preview {
            width: 112px;
            height: 96px;
            margin-right: 16px;
        }
    }

    .press__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .press__icon {
        position: absolute;
        top: 4px;
        left: 4px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 24px;
        height: 24px;
        border-radius: 4px;
        background: #FCFCFC;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    }

    body.dark .press__icon {
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.36);
        background: #111315;
    }

    .press__icon .icon {
        fill: #6F767E;
    }

    .press__post {
        max-width: 160px;
        margin-bottom: 12px;
        font-weight: 700;
    }

    @media only screen and (max-width: 1023px) {
        .press__post {
            max-width: 100%;
            font-size: 18px;
        }
    }

    @media only screen and (max-width: 767px) {
        .press__post {
            font-size: 15px;
        }
    }

    .press__socials {
        display: flex;
    }

    .press__social {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #EFEFEF;
        transition: all .2s;
    }

    .press__social .icon {
        width: 20px;
        height: 20px;
        fill: #1A1D1F;
        transition: fill .2s;
    }

    body.dark .press__social {
        background: #272B30;
    }

    body.dark .press__social .icon {
        fill: #FCFCFC;
    }

    .press__social:hover {
        background: #2A85FF;
    }

    .press__social:hover .icon {
        fill: #FCFCFC;
    }

    body.dark .press__social:hover {
        background: #2A85FF;
    }

    body.dark .press__social:hover .icon {
        fill: #FCFCFC;
    }

    .press__social:not(:last-child) {
        margin-right: 12px;
    }

    .press__distribution {
        font-size: 15px;
        font-weight: 600;
        color: #1A1D1F;
    }

    .press__label {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .press__label {
            display: block;
            flex-shrink: 0;
            width: 156px;
            padding-right: 20px;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.23077;
            color: #6F767E;
        }
    }

    @media only screen and (max-width: 767px) {
        .press__label {
            width: 128px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .press__cell {
            display: flex;
            align-items: center;
        }
    }

    .press__box {
        display: flex;
        align-items: center;
    }

    .press__number {
        padding: 0 7px;
        border-radius: 6px;
        background: #EFEFEF;
        line-height: 24px;
    }

    body.dark .press__number {
        background: #272B30;
    }

    .press__line {
        position: relative;
        flex-shrink: 0;
        width: 44px;
        height: 12px;
        margin-left: 8px;
    }

    @media only screen and (max-width: 1023px) {
        .press__line {
            margin-left: 12px;
        }
    }

    .press__progress {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        border-radius: 2px;
    }

    .press__progress_red {
        background: #FF6A55;
    }

    .press__progress_green {
        background: #83BF6E;
    }

    .press__progress_blue {
        background: #2A85FF;
    }

    .press .balance {
        margin-top: 8px;
        padding: 4px;
        border-radius: 4px;
    }

    @media only screen and (max-width: 1023px) {
        .press .balance {
            margin: 0 0 0 4px;
        }
    }

    body.dark .press .balance {
        background: #272B30;
    }

    .press__foot {
        margin-top: 20px;
        text-align: center;
    }

    @media only screen and (max-width: 1023px) {
        .press__foot {
            margin-top: 0;
        }
    }

    .press__foot .press__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    .post__title {
        margin-bottom: 24px;
    }

    .post__list {
        display: flex;
        margin-bottom: 24px;
    }

    .post__avatar {
        position: relative;
        width: 48px;
        height: 48px;
    }

    .post__avatar>img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .post__avatar:not(:last-child) {
        margin-right: 24px;
    }

    .post__social {
        position: absolute;
        right: -4px;
        bottom: -4px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        border: 2px solid #FCFCFC;
        background: #2A85FF;
    }

    body.dark .post__social {
        border-color: #1A1D1F;
    }

    .post__social .icon {
        width: 12px;
        height: 12px;
        fill: #FCFCFC;
    }

    .post__textarea {
        width: 100%;
        height: 132px;
        background: none;
        border: none;
        box-shadow: none;
        resize: none;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 767px) {
        .post__textarea {
            font-size: 18px;
        }
    }

    body.dark .post__textarea {
        color: #FCFCFC;
    }

    .post__textarea::-webkit-input-placeholder {
        color: rgba(111, 118, 126, 0.4);
    }

    .post__textarea::-moz-placeholder {
        color: rgba(111, 118, 126, 0.4);
    }

    .post__textarea:-ms-input-placeholder {
        color: rgba(111, 118, 126, 0.4);
    }

    .post__textarea::-ms-input-placeholder {
        color: rgba(111, 118, 126, 0.4);
    }

    .post__textarea::placeholder {
        color: rgba(111, 118, 126, 0.4);
    }

    body.dark .post__textarea::-webkit-input-placeholder {
        color: #9A9FA5;
    }

    body.dark .post__textarea::-moz-placeholder {
        color: #9A9FA5;
    }

    body.dark .post__textarea:-ms-input-placeholder {
        color: #9A9FA5;
    }

    body.dark .post__textarea::-ms-input-placeholder {
        color: #9A9FA5;
    }

    body.dark .post__textarea::placeholder {
        color: #9A9FA5;
    }

    .post__info {
        margin-bottom: 12px;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .post__info {
            font-size: 18px;
        }
    }

    .post__preview img {
        width: 100%;
        border-radius: 8px;
    }

    .post__foot {
        display: flex;
        align-items: center;
        margin-top: 24px;
        padding-top: 24px;
        border-top: 1px solid #EFEFEF;
    }

    body.dark .post__foot {
        border-color: #272B30;
    }

    .post__files {
        display: flex;
        margin-right: auto;
    }

    .post__file {
        position: relative;
        border-radius: 50%;
        overflow: hidden;
    }

    .post__file input {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 120px;
        opacity: 0;
    }

    .post__file input:hover+.post__icon {
        background: #EFEFEF;
        cursor: pointer;
    }

    .post__file input:hover+.post__icon .icon {
        fill: #1A1D1F;
    }

    body.dark .post__file input:hover+.post__icon {
        background: #272B30;
    }

    body.dark .post__file input:hover+.post__icon .icon {
        fill: #FCFCFC;
    }

    .post__file.active .post__icon {
        background: #EFEFEF;
    }

    .post__file:not(:last-child) {
        margin-right: 16px;
    }

    .post__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        transition: all .2s;
    }

    .post__icon .icon {
        width: 20px;
        height: 20px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .post__button .icon {
        width: 24px;
        height: 24px;
    }

    .notification__row {
        display: flex;
        align-items: flex-start;
    }

    @media only screen and (max-width: 1023px) {
        .notification__row {
            display: block;
        }
    }

    .notification__col:first-child {
        flex: 0 0 calc(100% - 340px);
        width: calc(100% - 340px);
        padding-right: 8px;
    }

    @media only screen and (max-width: 1259px) {
        .notification__col:first-child {
            flex: 0 0 calc(100% - 300px);
            width: calc(100% - 300px);
        }
    }

    @media only screen and (max-width: 1023px) {
        .notification__col:first-child {
            width: 100%;
            padding-right: 0;
        }
    }

    .notification__col:nth-child(2) {
        flex-shrink: 0;
        width: 340px;
        position: sticky;
        top: 102px;
    }

    @media only screen and (max-width: 1339px) {
        .notification__col:nth-child(2) {
            top: 86px;
        }
    }

    @media only screen and (max-width: 1259px) {
        .notification__col:nth-child(2) {
            width: 300px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .notification__col:nth-child(2) {
            display: none;
        }
    }

    .notification .actions {
        margin-left: 16px;
    }

    body.dark .notification .actions__button {
        background: #272B30;
    }

    .notification .select {
        min-width: 105px;
    }

    .notification__item {
        position: relative;
        display: flex;
        padding: 12px;
        border-radius: 12px;
        transition: background .2s;
    }

    @media only screen and (max-width: 767px) {
        .notification__item {
            padding: 0;
            border-radius: 0;
        }
    }

    @media only screen and (min-width: 768px) {
        .notification__item:hover {
            background: #F4F4F4;
        }

        body.dark .notification__item:hover {
            background: #272B30;
        }
    }

    .notification__item:after {
        content: "";
        position: absolute;
        top: 18px;
        right: 12px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #9A9FA5;
        transition: background .2s;
    }

    @media only screen and (max-width: 767px) {
        .notification__item:after {
            display: none;
        }
    }

    .notification__item.new:after {
        background: #2A85FF;
    }

    .notification__item:not(:last-child) {
        margin-bottom: 41px;
    }

    @media only screen and (max-width: 767px) {
        .notification__item:not(:last-child) {
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .notification__item:not(:last-child) {
            border-color: #272B30;
        }
    }

    .notification__item:not(:last-child):before {
        content: "";
        position: absolute;
        top: calc(100% + 20px);
        left: 12px;
        right: 12px;
        height: 1px;
        background: #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .notification__item:not(:last-child):before {
            display: none;
        }
    }

    body.dark .notification__item:not(:last-child):before {
        background: #272B30;
    }

    .notification__avatar {
        position: relative;
        flex-shrink: 0;
        width: 64px;
        height: 64px;
    }

    .notification__avatar>img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .notification__icon {
        position: absolute;
        right: -2px;
        bottom: -2px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        border: 2px solid #FFFFFF;
    }

    body.dark .notification__icon {
        border-color: #1A1D1F;
    }

    .notification__icon img {
        width: 16px;
    }

    .notification__details {
        flex: 0 0 calc(100% - 64px);
        width: calc(100% - 64px);
        padding-left: 12px;
    }

    .notification__line {
        display: flex;
        align-items: center;
        padding-right: 24px;
    }

    .notification__subtitle {
        margin-right: 4px;
        font-weight: 700;
        color: #1A1D1F;
    }

    body.dark .notification__subtitle {
        color: #FCFCFC;
    }

    .notification__login {
        margin-right: auto;
        font-weight: 500;
        color: #9A9FA5;
    }

    .notification__time {
        margin-left: 16px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .notification__content {
        font-weight: 500;
        color: #6F767E;
    }

    .notification__content strong {
        font-weight: 700;
        color: #1A1D1F;
    }

    body.dark .notification__content strong {
        color: #FCFCFC;
    }

    .notification__comment {
        margin-top: 8px;
        font-weight: 500;
    }

    .notification__control {
        display: flex;
        align-items: center;
        margin-top: 8px;
    }

    .notification__action {
        font-size: 15px;
        font-weight: 700;
        line-height: 1.6;
        color: #1A1D1F;
        transition: color .2s;
    }

    body.dark .notification__action {
        color: #FCFCFC;
    }

    .notification__action:hover {
        color: #2A85FF;
    }

    .notification__action:not(:last-child) {
        margin-right: 24px;
    }

    .notification__action_favorite span {
        display: none;
    }

    .notification__action_favorite.active {
        color: #2A85FF;
    }

    .notification__action_favorite.active span {
        display: inline;
    }

    .notification__group {
        display: flex;
        flex-direction: column;
    }

    .notification .checkbox:not(:last-child),
    .notification .radio:not(:last-child) {
        margin-bottom: 16px;
    }

    .notification__btns {
        display: flex;
        margin: 32px -6px 0;
    }

    .notification__btns .notification__button {
        width: calc(50% - 12px);
        flex: 0 0 calc(50% - 12px);
        margin: 0 6px;
    }

    .notification__variants {
        display: flex;
        flex-direction: column;
        margin-top: 32px;
        padding-top: 32px;
        border-top: 1px solid #EFEFEF;
    }

    body.dark .notification__variants {
        border-color: #272B30;
    }

    .notification__foot {
        margin-top: 32px;
        text-align: center;
    }

    .notification__foot .notification__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    .settings {
        display: flex;
        align-items: flex-start;
        padding: 24px;
        border-radius: 8px;
        background: #FCFCFC;
    }

    @media only screen and (max-width: 1023px) {
        .settings {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .settings {
            padding: 24px 16px;
        }
    }

    body.dark .settings {
        background: #1A1D1F;
    }

    .settings__menu {
    position: sticky;
    top: 85px;
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
    width: 20%;
    margin-left: 80%;
}

.settings__menu :focus{
    background: #ab8e66;
    color: #fff;
    
}

.settings__menu :hover {
    background: #ab8e66;
    color: #fff;
    
}

    @media only screen and (max-width: 1259px) {
        .settings__menu {
            width: 210px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .settings__menu {
            display: none;
        }
    }

    .settings__link {
        padding: 8px 16px;
        border-radius: 8px;
        text-align: left;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    .settings__link:not(:last-child) {
        margin-bottom: 8px;
    }

    body.dark .settings__link:hover,
    body.dark .settings__link.active {
        color: #ab8e66;
    }

    .settings__link.active {
        background: #EFEFEF;
    }

    body.dark .settings__link.active {
        background: #272B30;
    }

    .settings__wrapper {
        flex-grow: 1;
      padding-left: 32px;
    margin-top: 20%;
}

    @media only screen and (max-width: 1023px) {
        .settings__wrapper {
            padding-left: 0;
        }
    }

    .settings__wrapper>.settings__button {
        margin-top: 48px;
    }

    @media only screen and (max-width: 1023px) {
        .settings__wrapper>.settings__button {
            margin-top: 32px;
        }
    }

    .settings__wrapper>.select {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .settings__wrapper>.select {
            display: block;
            margin-bottom: 32px;
        }
    }

    @media only screen and (max-width: 767px) {
        .settings__wrapper>.select {
            margin-bottom: 24px;
        }
    }

    body.dark .settings__wrapper>.select {
        background: #272B30;
        box-shadow: 0 0 0 #272B30 inset;
    }

    .settings__item {
        position: relative;
    }


    .settings__item:not(:last-child) {
        margin-bottom: 48px;
        padding-bottom: 48px;
        border-bottom: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 1023px) {
        .settings__item:not(:last-child) {
            margin-bottom: 32px;
            padding-bottom: 32px;
        }
    }

    body.dark .settings__item:not(:last-child) {
        border-color: #272B30;
    }

    .settings__title {
        margin-bottom: 32px;
        line-height: 40px;
    }

    .settings__anchor {
        position: absolute;
        top: -116px;
        left: 0;
        right: 0;
    }

    @media only screen and (max-width: 1023px) {
        .settings__anchor {
            top: -106px;
        }
    }

    @media only screen and (max-width: 767px) {
        .settings__anchor {
            top: -90px;
        }
    }

    .settings__profile {
        display: flex;
        align-items: center;
        margin-bottom: 32px;
    }

    @media only screen and (max-width: 1023px) {
        .settings__profile {
            margin-bottom: 24px;
        }
    }

    @media only screen and (max-width: 767px) {
        .settings__profile>.settings__button {
            display: none;
        }
    }

    .settings__avatar {
        position: relative;
        flex-shrink: 0;
        width: 96px;
        height: 96px;
        margin-right: 32px;
    }

    @media only screen and (max-width: 767px) {
        .settings__avatar {
            width: 80px;
            height: 80px;
            margin-right: 16px;
        }
    }

    .settings__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    .settings__remove {
        display: none;
        position: absolute;
        top: 0;
        right: 0;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #FCFCFC;
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.25);
        font-size: 0;
    }

    @media only screen and (max-width: 767px) {
        .settings__remove {
            display: inline-block;
        }
    }

    .settings__file {
        position: relative;
        display: inline-block;
        margin-right: 12px;
        overflow: hidden;
    }

    @media only screen and (max-width: 767px) {
        .settings__file {
            margin-right: 0;
        }
    }

    .settings__file input {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 160px;
        opacity: 0;
    }

    @media only screen and (max-width: 767px) {
        .settings__file .settings__button {
            padding: 0 10px;
        }
    }

    .settings__file .settings__button .icon {
        width: 24px;
        height: 24px;
    }

    .settings__fieldset>.field:not(:last-child) {
        margin-bottom: 32px;
    }

    @media only screen and (max-width: 1023px) {
        .settings__fieldset>.field:not(:last-child) {
            margin-bottom: 24px;
        }
    }

    .settings__row {
        display: flex;
        margin: 0 -8px;
    }

    @media only screen and (max-width: 767px) {
        .settings__row {
            display: block;
            margin: 0;
        }
    }

    .settings__row .field {
        flex: 0 0 calc(50% - 16px);
        width: calc(50% - 16px);
        margin: 0 8px;
    }

    @media only screen and (max-width: 767px) {
        .settings__row .field {
            width: 100%;
            margin: 0;
        }

        .settings__row .field:not(:last-child) {
            margin-bottom: 24px;
        }
    }

    .settings__row:not(:last-child) {
        margin-bottom: 32px;
    }

    @media only screen and (max-width: 1023px) {
        .settings__row:not(:last-child) {
            margin-bottom: 24px;
        }
    }

    .settings__line {
        display: flex;
        padding-bottom: 16px;
    }

    .settings__line:not(:last-child) {
        margin-bottom: 32px;
        border-bottom: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 1023px) {
        .settings__line:not(:last-child) {
            margin-bottom: 24px;
        }
    }

    body.dark .settings__line:not(:last-child) {
        border-color: #272B30;
    }

    .settings__label {
        margin-right: 24px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #33383F;
    }

    body.dark .settings__label {
        color: #EFEFEF;
    }

    .settings .tooltip {
        position: relative;
        top: -1px;
    }

    .settings .tooltip .icon {
        fill: #9A9FA5;
    }

    .settings .switch {
        margin-left: auto;
    }

    .settings__top {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
        padding-bottom: 16px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .settings__top {
        border-color: #272B30;
    }

    .settings__top .settings__label {
        margin-right: 24px;
    }

    .settings__top .settings__button {
        margin-left: auto;
    }

    .settings__email {
        margin-bottom: 16px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    .settings__content {
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #6F767E;
    }

    .packages {
        padding: 48px;
        background: #FCFCFC;
        border-radius: 8px;
    }

    @media only screen and (max-width: 1259px) {
        .packages {
            padding: 32px;
        }
    }

    @media only screen and (max-width: 767px) {
        .packages {
            padding: 24px;
        }
    }

    body.dark .packages {
        background: #1A1D1F;
    }

    .packages__group {
        display: flex;
        flex-wrap: wrap;
        margin: -80px -80px 0;
    }

    @media only screen and (max-width: 1419px) {
        .packages__group {
            margin: -64px -64px 0;
        }
    }

    @media only screen and (max-width: 1023px) {
        .packages__group {
            display: block;
            margin: 0;
        }
    }

    .packages__item {
        display: flex;
        flex-direction: column;
        flex: 0 0 50%;
        margin-top: 80px;
        padding: 0 80px;
    }

    @media only screen and (max-width: 1419px) {
        .packages__item {
            margin-top: 64px;
            padding: 0 64px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .packages__item {
            margin: 0;
            padding: 0;
        }
    }

    .packages__item:nth-child(2n+1) {
        border-right: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 1023px) {
        .packages__item:nth-child(2n+1) {
            border: none;
        }
    }

    body.dark .packages__item:nth-child(2n+1) {
        border-color: #272B30;
    }

    @media only screen and (max-width: 1023px) {
        .packages__item:not(:last-child) {
            margin-bottom: 48px;
            padding-bottom: 48px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .packages__item:not(:last-child) {
            border-color: #272B30;
        }
    }

    .packages__top {
        display: flex;
        align-items: center;
        min-height: 40px;
        margin-bottom: 24px;
    }

    .packages__recommended {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 36px;
        margin-left: 18px;
        padding: 0 14px;
        border-radius: 20px;
        background: #B5E4CA;
        font-size: 13px;
        font-weight: 700;
        line-height: 1.84615;
    }

    body.dark .packages__recommended {
        color: #1A1D1F;
    }

    .packages__content {
        margin-bottom: 24px;
        color: #6F767E;
    }

    .packages__line {
        display: flex;
        align-items: center;
        margin-bottom: 24px;
        padding: 24px 0;
        border-width: 1px 0;
        border-style: solid;
        border-color: #EFEFEF;
    }

    body.dark .packages__line {
        border-color: #272B30;
    }

    .packages__percent {
        margin-right: 24px;
    }

    .packages__note {
        max-width: 190px;
        margin-right: auto;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .packages .tooltip {
        margin-left: 24px;
    }

    @media only screen and (max-width: 767px) {
        .packages .tooltip {
            display: none;
        }
    }

    .packages .tooltip .icon {
        width: 24px;
        height: 24px;
        fill: #9A9FA5;
    }

    .packages__list {
        flex-grow: 1;
    }

    .packages__list li {
        position: relative;
        padding-left: 40px;
        color: #33383F;
    }

    body.dark .packages__list li {
        color: #EFEFEF;
    }

    .packages__list li:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 24px;
        height: 24px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'%3E%3Cpath fill-rule='evenodd' d='M20.707 6.293a1 1 0 0 1 0 1.414l-8.586 8.586a3 3 0 0 1-4.243 0l-3.586-3.586a1 1 0 0 1 1.414-1.414l3.586 3.586a1 1 0 0 0 1.414 0l8.586-8.586a1 1 0 0 1 1.414 0z' fill='%23b5e4ca'/%3E%3C/svg%3E") no-repeat 50% 50%/100% auto;
    }

    .packages__list li:not(:last-child) {
        margin-bottom: 24px;
    }

    .packages__button {
        width: 100%;
        margin-top: 72px;
    }

    @media only screen and (max-width: 1023px) {
        .packages__button {
            margin-top: 48px;
        }
    }

    .packages:not(:last-child) {
        margin-bottom: 40px;
    }

    .faq__title {
        margin-bottom: 24px;
    }

    .faq__container {
        display: flex;
        padding: 48px;
        border-radius: 8px;
        background: #FCFCFC;
    }

    @media only screen and (max-width: 1259px) {
        .faq__container {
            padding: 32px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .faq__container {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .faq__container {
            padding: 24px;
        }
    }

    body.dark .faq__container {
        background: #1A1D1F;
    }

    .faq__sidebar {
        flex-shrink: 0;
        width: 224px;
    }

    @media only screen and (max-width: 1023px) {
        .faq__sidebar {
            width: 100%;
            margin-bottom: 32px;
        }
    }

    .faq__menu {
        display: flex;
        flex-direction: column;
    }

    @media only screen and (max-width: 1023px) {
        .faq__menu {
            display: none;
        }
    }

    .faq__link {
        padding: 8px 16px;
        border-radius: 8px;
        text-align: left;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    .faq__link:not(:last-child) {
        margin-bottom: 8px;
    }

    .faq__link:hover,
    .faq__link.active {
        color: #1A1D1F;
    }

    body.dark .faq__link:hover,
    body.dark .faq__link.active {
        color: #FCFCFC;
    }

    .faq__link.active {
        background: #EFEFEF;
    }

    body.dark .faq__link.active {
        background: #272B30;
    }

    .faq .select {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .faq .select {
            display: block;
        }
    }

    body.dark .faq .select {
        background: #272B30;
        box-shadow: inset 0 0 0 2px #272B30;
    }

    .faq__wrapper {
        flex-grow: 1;
        padding-left: 64px;
    }

    @media only screen and (max-width: 1259px) {
        .faq__wrapper {
            padding-left: 48px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .faq__wrapper {
            padding-left: 0;
        }
    }

    .faq__tab {
        display: none;
    }

    .faq__item:hover .faq__head .icon,
    .faq__item.active .faq__head .icon {
        fill: #1A1D1F;
    }

    body.dark .faq__item:hover .faq__head .icon,
    body.dark .faq__item.active .faq__head .icon {
        fill: #FCFCFC;
    }

    .faq__item.active .faq__head .icon {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .faq__item:not(:last-child) {
        margin-bottom: 24px;
    }

    .faq__head {
        position: relative;
        display: flex;
        padding-bottom: 12px;
        border-bottom: 1px solid #EFEFEF;
        color: #33383F;
        cursor: pointer;
        transition: color .2s;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    body.dark .faq__head {
        border-color: #272B30;
        color: #FCFCFC;
    }

    .faq__head .icon {
        width: 24px;
        height: 24px;
        flex-shrink: 0;
        margin-left: 24px;
        fill: #6F767E;
        transition: all .2s;
    }

    .faq__subtitle {
        flex-grow: 1;
    }

    .faq__body {
        display: none;
        padding-top: 24px;
        font-weight: 500;
        color: #6F767E;
    }

    .messages {
        display: flex;
        height: 776px;
        padding: 12px;
        border-radius: 8px;
        background: #FCFCFC;
    }

    @media only screen and (max-width: 1419px) {
        .messages {
            height: 700px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .messages {
            display: block;
            height: calc(100vh - 218px);
            padding: 0;
        }

        .messages.active .messages__users {
            display: none;
        }

        .messages.active .messages__messenger {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .messages {
            height: calc(100vh - 184px);
        }
    }

    body.dark .messages {
        background: #1A1D1F;
    }

    .messages__users {
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
        width: 340px;
        margin-right: 12px;
        padding: 12px;
    }

    @media only screen and (max-width: 1259px) {
        .messages__users {
            width: 310px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .messages__users {
            width: 100%;
            height: 100%;
            margin-right: 0;
            padding: 24px 32px;
        }
    }

    @media only screen and (max-width: 767px) {
        .messages__users {
            padding: 16px;
        }
    }

    .messages__nav {
        display: flex;
        margin-bottom: 36px;
        padding: 4px;
        border-radius: 20px;
        background: #F4F4F4;
    }

    @media only screen and (max-width: 1259px) {
        .messages__nav {
            margin-bottom: 24px;
        }
    }

    @media only screen and (max-width: 767px) {
        .messages__nav {
            margin-bottom: 16px;
        }
    }

    body.dark .messages__nav {
        background: #111315;
    }

    .messages__link {
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 0 0 50%;
        height: 32px;
        border-radius: 16px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        transition: color .2s;
    }

    .messages__link .icon {
        width: 24px;
        height: 24px;
        margin-right: 8px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .messages__link:hover,
    .messages__link.active {
        color: #1A1D1F;
    }

    .messages__link:hover .icon,
    .messages__link.active .icon {
        fill: #1A1D1F;
    }

    body.dark .messages__link:hover,
    body.dark .messages__link.active {
        color: #FCFCFC;
    }

    body.dark .messages__link:hover .icon,
    body.dark .messages__link.active .icon {
        fill: #FCFCFC;
    }

    .messages__link.active {
        box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.25), inset 0px -1px 1px rgba(0, 0, 0, 0.04), inset 0px 2px 0px rgba(255, 255, 255, 0.25);
        background: #FCFCFC;
    }

    body.dark .messages__link.active {
        box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.25), inset 0px -1px 1px rgba(0, 0, 0, 0.49), inset 0px 2px 1px rgba(255, 255, 255, 0.06);
        background: #272B30;
    }

    .messages__list {
        max-height: 100%;
        margin: 0 -12px 16px;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
    }

    @media only screen and (max-width: 767px) {
        .messages__list {
            margin: 0 -8px 16px;
        }
    }

    .messages__item {
        display: flex;
        align-items: center;
        padding: 12px;
        border-radius: 12px;
        cursor: pointer;
        transition: all .2s;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    @media only screen and (max-width: 767px) {
        .messages__item {
            padding: 8px;
        }
    }

    .messages__item:hover,
    .messages__item.active {
        background: #EFEFEF;
    }

    body.dark .messages__item:hover,
    body.dark .messages__item.active {
        background: #272B30;
    }

    .messages__item.new .messages__head:after {
        background: #2A85FF;
    }

    .messages__item.online .messages__avatar {
        position: relative;
    }

    .messages__item.online .messages__avatar:before {
        content: "";
        position: absolute;
        top: -2px;
        left: -2px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #83BF6E;
        border: 4px solid #FCFCFC;
        transition: border-color .2s;
    }

    body.dark .messages__item.online .messages__avatar:before {
        border-color: #1A1D1F;
    }

    .messages__item.online:hover .messages__avatar:before {
        border-color: #EFEFEF;
    }

    body.dark .messages__item.online:hover .messages__avatar:before {
        border-color: #272B30;
    }

    .messages__item:not(:last-child) {
        margin-bottom: 8px;
    }

    @media only screen and (max-width: 767px) {
        .messages__item:not(:last-child) {
            margin-bottom: 0;
        }
    }

    .messages__avatar {
        flex-shrink: 0;
        width: 56px;
        height: 56px;
    }

    .messages__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    .messages__details {
        flex: 0 0 calc(100% - 56px);
        max-width: calc(100% - 56px);
        padding-left: 12px;
    }

    .messages__head {
        position: relative;
        display: flex;
        align-items: center;
        margin-bottom: 4px;
    }

    .messages__head:after {
        content: "";
        flex-shrink: 0;
        display: block;
        width: 12px;
        height: 12px;
        margin-left: 12px;
        border-radius: 50%;
        background: #9A9FA5;
        transition: background .2s;
    }

    .messages__man {
        margin-right: auto;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        font-weight: 700;
    }

    .messages__time {
        flex-shrink: 0;
        margin-left: 24px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .messages__content {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        font-weight: 500;
        color: #6F767E;
    }

    .messages .form {
        width: 100%;
        margin-top: auto;
    }

    @media only screen and (max-width: 1023px) {
        .messages__messenger {
            display: none;
        }
    }

    .messenger {
        flex-grow: 1;
        border: 1px solid #EFEFEF;
        border-radius: 12px;
    }

    @media only screen and (max-width: 1023px) {
        .messenger {
            height: 100%;
            border: none;
        }
    }

    body.dark .messenger {
        border-color: #272B30;
    }

    .messenger__wrapper {
        position: relative;
        height: calc(100% - 104px);
        padding: 96px 24px;
    }

    @media only screen and (max-width: 1023px) {
        .messenger__wrapper {
            height: calc(100% - 88px);
        }
    }

    @media only screen and (max-width: 767px) {
        .messenger__wrapper {
            height: calc(100% - 72px);
            padding: 64px 16px 72px;
        }
    }

    .messenger__wrapper>.messenger__button {
        position: absolute;
        top: 24px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    @media only screen and (max-width: 767px) {
        .messenger__wrapper>.messenger__button {
            top: 12px;
        }
    }

    .messenger__list {
        max-height: 100%;
        flex-grow: 1;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
    }

    .messenger__panel {
        padding: 24px;
        border-radius: 12px 12px 0 0;
        background: #F4F4F4;
    }

    @media only screen and (max-width: 1023px) {
        .messenger__panel {
            background: none;
            box-shadow: inset 0 -1px 0 0 #EFEFEF;
        }
    }

    @media only screen and (max-width: 767px) {
        .messenger__panel {
            padding: 16px;
        }
    }

    body.dark .messenger__panel {
        background: #272B30;
    }

    @media only screen and (max-width: 1023px) {
        body.dark .messenger__panel {
            background: none;
            box-shadow: inset 0 -1px 0 0 #272B30;
        }
    }

    .messenger__line {
        display: flex;
        align-items: center;
    }

    .messenger__line .messenger__man {
        margin-right: auto;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .messenger__line .messenger__man {
            font-size: 18px;
        }
    }

    .messenger__close {
        display: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-left: 12px;
    }

    @media only screen and (max-width: 1023px) {
        .messenger__close {
            display: inline-block;
        }
    }

    .messenger__close .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        body.dark .messenger__close {
            background: #272B30;
        }
    }

    .messenger__parameters {
        display: flex;
        flex-wrap: wrap;
        margin-left: -12px;
    }

    @media only screen and (max-width: 1419px) {
        .messenger__parameters {
            margin-top: 8px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .messenger__parameters {
            display: none;
        }
    }

    .messenger__parameter {
        margin-left: 12px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        font-weight: 500;
        color: #6F767E;
    }

    .messenger__parameter span {
        font-weight: 700;
        color: #33383F;
    }

    body.dark .messenger__parameter span {
        color: #FCFCFC;
    }

    .messenger__parameter:not(:first-child) {
        position: relative;
        padding-left: 14px;
    }

    .messenger__parameter:not(:first-child):before {
        content: "";
        position: absolute;
        top: 2px;
        left: 0;
        width: 2px;
        height: 12px;
        border-radius: 2px;
        background: rgba(111, 118, 126, 0.51);
    }

    .messenger .actions__button {
        background: #FCFCFC !important;
    }

    body.dark .messenger .actions__button {
        background: rgba(17, 19, 21, 0.5) !important;
    }

    @media only screen and (max-width: 1023px) {
        body.dark .messenger .actions__button {
            background: #272B30 !important;
        }
    }

    body.dark .messenger .actions__body:before {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='10' fill='none' viewBox='0 0 20 10'%3E%3Cpath d='M6.927 1.687L0 10h20l-6.927-8.313a4 4 0 0 0-6.146 0z' fill='%23111315'/%3E%3C/svg%3E");
    }

    @media only screen and (max-width: 1023px) {
        body.dark .messenger .actions__body:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='10' fill='none' viewBox='0 0 20 10'%3E%3Cpath d='M6.927 1.687L0 10h20l-6.927-8.313a4 4 0 0 0-6.146 0z' fill='%23272B30'/%3E%3C/svg%3E");
        }
    }

    .messenger__item {
        display: flex;
    }

    .messenger__item:not(:last-child) {
        margin-bottom: 32px;
    }

    .messenger__avatar {
        flex-shrink: 0;
        width: 40px;
        height: 40px;
    }

    .messenger__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    .messenger__details {
        flex: 0 0 calc(100% - 40px);
        max-width: calc(100% - 40px);
        padding-left: 16px;
    }

    .messenger__head {
        display: flex;
        align-items: center;
        margin-bottom: 4px;
    }

    .messenger__head .messenger__man {
        color: #6F767E;
    }

    .messenger__time {
        margin-left: 12px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .messenger__content {
        font-weight: 500;
    }

    .messenger__content a {
        font-weight: 600;
        color: #2A85FF;
    }

    .messenger__send {
        position: absolute;
        left: 24px;
        right: 24px;
        bottom: 24px;
        display: flex;
        align-items: center;
    }

    @media only screen and (max-width: 767px) {
        .messenger__send {
            left: 16px;
            right: 16px;
            bottom: 16px;
        }
    }

    .messenger__file,
    .messenger .smile {
        flex-shrink: 0;
        margin-right: 24px;
    }

    @media only screen and (max-width: 767px) {

        .messenger__file,
        .messenger .smile {
            margin-right: 12px;
        }
    }

    .messenger__file {
        position: relative;
        overflow: hidden;
    }

    .messenger__file input {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 140px;
        opacity: 0;
    }

    .messenger__file .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .messenger__file input:hover+svg {
        fill: #1A1D1F;
    }

    body.dark .messenger__file input:hover+svg {
        fill: #2A85FF;
    }

    .messenger__form {
        position: relative;
        flex-grow: 1;
    }

    .messenger__input {
        width: 100%;
        height: 48px;
        padding: 0 96px 0 10px;
        border-radius: 12px;
        border: 2px solid #EFEFEF;
        background: #F4F4F4;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #1A1D1F;
    }

    .messenger__input::-webkit-input-placeholder {
        color: #6F767E;
    }

    .messenger__input::-moz-placeholder {
        color: #6F767E;
    }

    .messenger__input:-ms-input-placeholder {
        color: #6F767E;
    }

    .messenger__input::-ms-input-placeholder {
        color: #6F767E;
    }

    .messenger__input::placeholder {
        color: #6F767E;
    }

    .messenger__input:focus {
        border-color: rgba(42, 133, 255, 0.35);
        background: #FFFFFF;
    }

    body.dark .messenger__input {
        background: #272B30;
        border-color: #272B30;
        color: #FCFCFC;
    }

    body.dark .messenger__input:focus {
        background: #111315;
    }

    .messenger__form .messenger__button {
        position: absolute;
        top: 50%;
        right: 4px;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .creators {
        padding: 24px;
        border-radius: 8px;
        background: #FCFCFC;
        overflow: hidden;
    }

    @media only screen and (max-width: 767px) {
        .creators {
            padding: 16px;
        }
    }

    body.dark .creators {
        background: #1A1D1F;
    }

    .creators__head {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .creators__head {
            display: block;
        }
    }

    body.dark .creators__head {
        border-color: #272B30;
    }

    .creators__nav {
        display: flex;
        margin-right: auto;
    }

    @media only screen and (max-width: 767px) {
        .creators__nav {
            margin: 0 0 20px;
        }
    }

    .creators__link {
        padding: 8px 16px;
        text-align: center;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    @media only screen and (max-width: 767px) {
        .creators__link {
            flex-grow: 1;
        }
    }

    .creators__link:hover,
    .creators__link.active {
        color: #1A1D1F;
    }

    body.dark .creators__link:hover,
    body.dark .creators__link.active {
        color: #FCFCFC;
    }

    .creators__link.active {
        background: #EFEFEF;
    }

    body.dark .creators__link.active {
        background: #272B30;
    }

    .creators__link:not(:last-child) {
        margin-right: 8px;
    }

    .creators__info {
        margin-bottom: 20px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .creators__item {
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .creators__item {
        border-color: #272B30;
    }

    .creators__top {
        display: flex;
        align-items: center;
    }

    .creators__user {
        display: flex;
        align-items: center;
        margin-right: auto;
    }

    .creators__avatar {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 16px;
    }

    @media only screen and (max-width: 767px) {
        .creators__avatar {
            width: 64px;
            height: 64px;
        }
    }

    .creators__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    .creators__line {
        display: flex;
        align-items: center;
        margin-bottom: 4px;
    }

    .creators__man {
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .creators__man {
            font-size: 18px;
        }
    }

    .creators__number {
        margin-left: 6px;
        padding: 4px 8px;
        border-radius: 6px;
        font-weight: 700;
    }

    body.dark .creators__number {
        color: #1A1D1F;
    }

    .creators__parameters {
        display: flex;
        margin-left: -12px;
    }

    .creators__parameter {
        margin-left: 12px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .creators__parameter span {
        color: #6F767E;
    }

    .creators__parameter:not(:first-child) {
        position: relative;
        padding-left: 14px;
    }

    .creators__parameter:not(:first-child):before {
        content: "";
        position: absolute;
        top: 5px;
        left: 0;
        width: 2px;
        height: 8px;
        border-radius: 2px;
        background: #EFEFEF;
    }

    body.dark .creators__parameter:not(:first-child):before {
        background: #272B30;
    }

    .creators__btns {
        display: flex;
        margin-left: 24px;
    }

    @media only screen and (max-width: 767px) {
        .creators__btns {
            display: none;
        }
    }

    .creators__btns .creators__button span {
        display: none;
    }

    .creators__btns .creators__button:not(:last-child) {
        margin-right: 8px;
    }

    .creators__btns .creators__button:first-child.active {
        background: #EFEFEF;
        box-shadow: inset 0 0 0 3px #EFEFEF;
    }

    .creators__btns .creators__button:first-child.active span {
        display: inline;
    }

    body.dark .creators__btns .creators__button:first-child.active {
        background: transparent;
        box-shadow: 0 0 0 2px #6F767E inset;
    }

    .creators__products {
        display: flex;
        margin: 24px -24px 0;
        overflow: auto;
        overflow-x: auto;
        -ms-overflow-style: none;
        scrollbar-width: none;
        -webkit-overflow-scrolling: touch;
    }

    .creators__products::-webkit-scrollbar {
        display: none;
    }

    .creators__products:before,
    .creators__products:after {
        content: "";
        display: block;
        flex-shrink: 0;
        width: 24px;
        height: 1px;
    }

    .creators__product {
        position: relative;
        flex-shrink: 0;
        width: 212px;
        height: 166px;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
    }

    .creators__product img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .creators__product:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(17, 19, 21, 0.8) url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='36' height='36' fill='none' viewBox='0 0 36 36'%3E%3Crect width='36' height='36' rx='18' fill='%23fcfcfc'/%3E%3Cpath d='M19.077 22.827c-.325.325-.325.853 0 1.178s.853.325 1.178 0l4.827-4.827c.651-.651.651-1.706 0-2.357l-4.827-4.827c-.325-.325-.853-.325-1.178 0s-.325.853 0 1.178l3.994 3.994H11.333c-.46 0-.833.373-.833.833s.373.833.833.833h11.738l-3.994 3.994z' fill='%236f767e'/%3E%3C/svg%3E") no-repeat 50% 50%/36px auto;
        opacity: 0;
        visibility: hidden;
        transition: all .2s;
    }

    .creators__product:hover:before {
        visibility: visible;
        opacity: 1;
    }

    .creators__product:not(:last-child) {
        margin-right: 12px;
    }

    .creators__foot {
        padding: 12px 0;
        text-align: center;
    }

    @media only screen and (max-width: 767px) {
        .creators__foot {
            padding: 0;
        }
    }

    .creators__foot .creators__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    .indicators {
        background: #FCFCFC;
        border-radius: 8px;
    }

    body.dark .indicators {
        background: #1A1D1F;
    }

    .indicators__table {
        display: table;
        width: 100%;
    }

    .indicators__row {
        display: table-row;
    }

    .indicators__row:first-child .indicators__col {
        padding-top: 24px;
        padding-bottom: 24px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #6F767E;
    }

    @media only screen and (max-width: 767px) {
        .indicators__row:first-child .indicators__col {
            padding: 16px;
        }
    }

    .indicators__row:nth-child(2n) .indicators__col {
        background: rgba(239, 239, 239, 0.35);
    }

    body.dark .indicators__row:nth-child(2n) .indicators__col {
        background: rgba(17, 19, 21, 0.5);
    }

    .indicators__col {
        display: table-cell;
        padding: 16px;
        white-space: nowrap;
    }

    @media only screen and (max-width: 1259px) {
        .indicators__col {
            padding: 16px 8px;
        }
    }

    @media only screen and (max-width: 767px) {
        .indicators__col {
            padding-left: 16px;
        }
    }

    .indicators__col:first-child {
        padding-left: 24px;
        color: #6F767E;
    }

    @media only screen and (max-width: 1259px) {
        .indicators__col:first-child {
            font-size: 13px;
        }
    }

    @media only screen and (max-width: 767px) {
        .indicators__col:first-child {
            padding-left: 16px;
        }
    }

    .indicators__col:last-child {
        padding-right: 24px;
    }

    @media only screen and (max-width: 767px) {
        .indicators__col:nth-child(3n+1) {
            display: none;
        }
    }

    .indicators .tooltip {
        position: relative;
        top: -1px;
    }

    .indicators .tooltip .icon {
        fill: #9A9FA5;
    }

    .indicators__box {
        display: flex;
        align-items: center;
    }

    .indicators__line {
        position: relative;
        flex-shrink: 0;
        width: 44px;
        height: 12px;
        margin-left: 8px;
    }

    .indicators__progress {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        border-radius: 2px;
    }

    .indicators__progress_blue {
        background: #2A85FF;
    }

    .indicators__progress_purple {
        background: #8E59FF;
    }

    .indicators .counter {
        padding: 0 7px;
        border-radius: 6px;
        background: #EFEFEF;
    }

    body.dark .indicators .counter {
        background: #272B30;
    }

    .indicators .balance {
        margin-top: 10px;
    }

    .link__title {
        margin-bottom: 16px;
        color: #6F767E;
    }

    .link__fieldset {
        margin-bottom: 32px;
    }

    .link__fieldset .select,
    .link__fieldset .field {
        margin-bottom: 12px;
    }

    .link__box:not(:last-child) {
        margin-bottom: 32px;
    }

    .link__label {
        margin-bottom: 16px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        font-weight: 500;
        color: #6F767E;
    }

    .link__line {
        display: flex;
        align-items: center;
    }

    .link__list {
        display: flex;
        margin-right: auto;
    }

    .link__avatar {
        position: relative;
        width: 48px;
        height: 48px;
    }

    .link__avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .link__avatar:not(:last-child) {
        margin-right: 24px;
    }

    .link__icon {
        position: absolute;
        right: -4px;
        bottom: -4px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        border: 2px solid #FFFFFF;
        background: #2A85FF;
    }

    body.dark .link__icon {
        border-color: #1A1D1F;
    }

    .link__icon .icon {
        width: 12px;
        height: 12px;
        fill: #FCFCFC;
    }

    .link__button .icon {
        width: 24px;
        height: 24px;
    }

    .login {
        position: relative;
        display: flex;
        min-height: calc(var(--vh, 1vh) * 100);
        background: #FCFCFC;
    }

    body.dark .login {
        background: #1A1D1F;
    }

    .login__col {
        padding: 96px 24px;
    }

    @media only screen and (max-width: 767px) {
        .login__col {
            padding-bottom: 32px;
        }
    }

    .login__col:first-child {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 400px;
        background: #F4F4F4;
    }

    @media only screen and (max-width: 1023px) {
        .login__col:first-child {
            display: none;
        }
    }

    body.dark .login__col:first-child {
        background: #111315;
    }

    .login__col:nth-child(2) {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-grow: 1;
    }

    .login__wrap {
        max-width: 212px;
    }

    .login__preview {
        max-width: 180px;
        margin: 0 auto 40px;
    }

    .login__preview img {
        width: 100%;
    }

    .login__subtitle {
        margin-bottom: 48px;
        text-align: center;
    }

    .login__list li {
        position: relative;
        padding-left: 36px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #6F767E;
    }

    .login__list li:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 24px;
        height: 24px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'%3E%3Cpath fill-rule='evenodd' d='M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10zm-2 0a8 8 0 1 1-16 0 8 8 0 0 1 8-8 7.98 7.98 0 0 1 5.942 2.644L11 13.586l-2.793-2.793a1 1 0 0 0-1.414 1.414L9.586 15a2 2 0 0 0 2.828 0l6.687-6.687C19.676 9.416 20 10.67 20 12z' fill='%2383bf6e'/%3E%3C/svg%3E") no-repeat 50% 50%/100% auto;
    }

    .login__list li:not(:last-child) {
        margin-bottom: 20px;
    }

    .login__logo {
        display: inline-block;
        position: absolute;
        top: 24px;
        left: 24px;
        z-index: 2;
        width: 48px;
    }

    .login__logo img {
        width: 100%;
    }

    .login__info {
        position: absolute;
        top: 40px;
        right: 40px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    @media only screen and (max-width: 1023px) {
        .login__info {
            padding-left: 80px;
        }
    }

    @media only screen and (max-width: 767px) {
        .login__info {
            right: 24px;
        }
    }

    .login__info a {
        font-weight: 700;
        color: #1A1D1F;
        transition: color .2s;
    }

    body.dark .login__info a {
        color: #FCFCFC;
    }

    .login__info a:hover {
        color: #2A85FF;
    }

    .login__wrapper {
        max-width: 296px;
    }

    @media only screen and (max-width: 767px) {
        .login__wrapper {
            max-width: 100%;
        }
    }

    .login__title {
        margin-bottom: 32px;
    }

    .login__top {
        margin-bottom: 32px;
        padding-bottom: 32px;
        border-bottom: 2px solid #EFEFEF;
    }

    body.dark .login__top {
        border-color: #272B30;
    }

    .login__text {
        margin-bottom: 20px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    .login__btns {
        display: flex;
        margin: 0 -4px;
    }

    .login__btns .login__button {
        flex: 0 0 calc(50% - 8px);
        width: calc(50% - 8px);
        margin: 0 4px;
        padding: 0 16px;
    }

    .login__btns .login__button img {
        margin-right: 10px;
    }

    .login__fieldset .login__button {
        width: 100%;
    }

    .login .field {
        margin-bottom: 12px;
    }

    .login__note {
        margin-top: 32px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #9A9FA5;
    }

    .login__code {
        display: none;
    }

    .login__row {
        display: flex;
        margin: 0 -6px;
    }

    .login__field {
        flex: 0 0 calc(25% - 12px);
        width: calc(25% - 12px);
        margin: 0 6px;
    }

    .login__field input {
        width: 100%;
        height: 72px;
        padding: 0 6px;
        border-radius: 12px;
        border: 2px solid transparent;
        background: #EFEFEF;
        text-align: center;
        font-family: 'Inter', sans-serif;
        font-size: 48px;
        font-weight: 600;
        color: #1A1D1F;
        transition: all .2s;
    }

    .login__field input:focus {
        border-color: #9A9FA5;
        background: #FFFFFF;
    }

    body.dark .login__field input {
        background: #272B30;
        color: #FCFCFC;
    }

    body.dark .login__field input:focus {
        background: transparent;
    }

    .login__field input.error {
        background: rgba(255, 188, 153, 0.25);
        border-color: transparent;
        color: #FF6A55;
    }

    .login__error {
        display: none;
        margin-top: 12px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #FF6A55;
    }

    .login__code .login__button {
        width: 100%;
        margin-top: 12px;
    }

    .login__code .login__button .loader {
        display: none;
        margin-right: 16px;
    }

    .entry {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(var(--vh, 1vh) * 100);
        padding: 48px;
        background: #FCFCFC;
    }

    @media only screen and (max-width: 767px) {
        .entry {
            padding: 24px;
        }
    }

    body.dark .entry {
        background: #1A1D1F;
    }

    .entry__wrapper {
        max-width: 296px;
    }

    @media only screen and (max-width: 767px) {
        .entry__wrapper {
            max-width: 100%;
        }
    }

    .entry__logo {
        display: inline-block;
        width: 48px;
        margin-bottom: 32px;
    }

    .entry__logo img {
        width: 100%;
    }

    .entry__title {
        margin-bottom: 32px;
    }

    .entry__top {
        margin-bottom: 32px;
        padding-bottom: 32px;
        border-bottom: 2px solid #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .entry__top {
            margin-bottom: 24px;
            padding-bottom: 24px;
        }
    }

    body.dark .entry__top {
        border-color: #272B30;
    }

    .entry__text {
        margin-bottom: 20px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    .entry__btns {
        display: flex;
        margin: 0 -4px;
    }

    .entry__btns .entry__button {
        flex: 0 0 calc(50% - 8px);
        width: calc(50% - 8px);
        margin: 0 4px;
        padding: 0 16px;
    }

    .entry__btns .entry__button img {
        margin-right: 10px;
    }

    .entry__fieldset .entry__button {
        width: 100%;
    }

    .entry .field {
        margin-bottom: 12px;
    }

    .entry__note {
        margin-top: 32px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #9A9FA5;
    }

    @media only screen and (max-width: 767px) {
        .entry__note {
            margin-top: 24px;
        }
    }

    .entry__info {
        margin-top: 32px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    @media only screen and (max-width: 767px) {
        .entry__info {
            margin-top: 24px;
        }
    }

    .entry__info a {
        font-weight: 700;
        color: #1A1D1F;
        transition: color .2s;
    }

    body.dark .entry__info a {
        color: #FCFCFC;
    }

    .entry__info a:hover {
        color: #2A85FF;
    }

    body.dark .entry__info a:hover {
        color: #2A85FF;
    }

    .income__list {
        display: flex;
        justify-content: space-between;
    }

    @media only screen and (max-width: 1023px) {
        .income__list {
            display: block;
        }
    }

    .income__item {
        display: block;
        padding: 0 32px 0 64px;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 1339px) {
        .income__item {
            padding-left: 48px;
        }
    }

    @media only screen and (max-width: 1259px) {
        .income__item {
            padding: 0 32px 0 24px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .income__item {
            display: flex;
            padding: 0;
        }
    }

    .income__item:not(:first-child) {
        border-width: 0 0 0 1px;
        border-style: solid;
        border-color: #EFEFEF;
    }

    @media only screen and (max-width: 1023px) {
        .income__item:not(:first-child) {
            margin-top: 16px;
            padding-top: 16px;
            border-width: 1px 0 0;
        }
    }

    body.dark .income__item:not(:first-child) {
        border-color: #272B30;
    }

    .income__item:first-child {
        padding-left: 0;
    }

    .income__item:last-child {
        padding-right: 0;
    }

    .income__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 48px;
        height: 48px;
        margin-bottom: 24px;
        border-radius: 50%;
    }

    @media only screen and (max-width: 1023px) {
        .income__icon {
            margin: 0 16px 0 0;
        }
    }

    .income__icon .icon {
        width: 24px;
        height: 24px;
        fill: #1A1D1F;
    }

    .income__label {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .income .tooltip .icon {
        fill: #6F767E;
    }

    .income__counter {
        min-width: 238px;
        font-size: 48px;
        font-weight: 600;
        line-height: 1;
        letter-spacing: -.03em;
    }

    @media only screen and (max-width: 1339px) {
        .income__counter {
            min-width: 200px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .income__counter {
            min-width: auto;
            font-size: 40px;
        }
    }

    @media only screen and (max-width: 767px) {
        .income__counter {
            font-size: 32px;
        }
    }

    body.dark .income__counter {
        color: #FCFCFC;
    }

    .income__indicator {
        display: inline-flex;
        align-items: center;
        margin-top: 8px;
        padding: 4px;
        color: #6F767E;
    }

    body.dark .income__indicator {
        background: #272B30;
        border-radius: 8px;
    }

    .income__indicator span {
        margin-left: 4px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
    }

    .countries__item {
        display: flex;
        align-items: center;
        color: #33383F;
    }

    body.dark .countries__item {
        color: #EFEFEF;
    }

    .countries__item:not(:last-child) {
        margin-bottom: 12px;
        padding-bottom: 12px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .countries__item:not(:last-child) {
        border-color: #272B30;
    }

    .countries__flag {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        margin-right: 12px;
        border-radius: 50%;
        background: #EFEFEF;
    }

    body.dark .countries__flag {
        background: #272B30;
    }

    .countries__price {
        margin-left: auto;
        padding-left: 20px;
        color: #1A1D1F;
    }

    body.dark .countries__price {
        color: #FCFCFC;
    }

    .earning {
        padding-bottom: 24px;
        background: #FCFCFC;
        border-radius: 8px;
    }

    body.dark .earning {
        background: #1A1D1F;
    }

    .earning__table {
        display: table;
        width: 100%;
    }

    .earning__row {
        display: table-row;
    }

    .earning__row:first-child .earning__col {
        padding-top: 16px;
        padding-bottom: 16px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #6F767E;
    }

    .earning__row:nth-child(2n) .earning__col {
        background: rgba(239, 239, 239, 0.35);
    }

    body.dark .earning__row:nth-child(2n) .earning__col {
        background: rgba(39, 43, 48, 0.3);
    }

    .earning__col {
        display: table-cell;
        padding: 10px 16px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    .earning__col:first-child {
        padding-left: 24px;
        white-space: nowrap;
        color: #6F767E;
    }

    @media only screen and (max-width: 767px) {
        .earning__col:first-child {
            padding-left: 16px;
        }
    }

    @media only screen and (max-width: 767px) {
        .earning__col:nth-child(2) {
            display: none;
        }
    }

    .earning__col:last-child {
        padding-right: 24px;
    }

    @media only screen and (max-width: 767px) {
        .earning__col:last-child {
            padding-right: 16px;
        }
    }

    .earning__status {
        font-size: 14px;
        line-height: 28px;
        font-weight: 600;
    }

    @media only screen and (max-width: 767px) {
        .refunds .card__head {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .refunds .card__title {
            margin: 0 0 16px;
        }
    }

    .refunds .card__nav {
        display: flex;
        margin-left: auto;
    }

    .refunds .card__nav .card__link {
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    @media only screen and (max-width: 767px) {
        .refunds .card__nav .card__link {
            flex: 1;
        }
    }

    .refunds .card__nav .card__link:hover,
    .refunds .card__nav .card__link.active {
        color: #1A1D1F;
    }

    body.dark .refunds .card__nav .card__link:hover,
    body.dark .refunds .card__nav .card__link.active {
        color: #FCFCFC;
    }

    .refunds .card__nav .card__link.active {
        background: #EFEFEF;
    }

    body.dark .refunds .card__nav .card__link.active {
        background: #272B30;
    }

    .refunds .card__nav .card__link:not(:last-child) {
        margin-right: 4px;
    }

    @media only screen and (max-width: 767px) {
        .refunds .card__nav .card__link:not(:last-child) {
            margin-right: 0;
        }
    }

    .refunds__wrapper {
        margin: 0 -12px;
    }

    @media only screen and (max-width: 767px) {
        .refunds__wrapper {
            margin: 0;
        }
    }

    .refunds__table {
        display: table;
        width: 100%;
    }

    @media only screen and (max-width: 767px) {
        .refunds__table {
            display: block;
        }
    }

    .refunds__row {
        display: table-row;
    }

    @media only screen and (max-width: 767px) {
        .refunds__row {
            display: flex;
        }
    }

    @media only screen and (max-width: 767px) {
        .refunds__row:first-child {
            margin-bottom: 24px;
        }
    }

    .refunds__row:first-child .refunds__col {
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #6F767E;
    }

    .refunds__row:not(:first-child) {
        cursor: pointer;
        transition: background .2s;
    }

    @media only screen and (max-width: 767px) {
        .refunds__row:not(:first-child) {
            align-items: flex-start;
        }
    }

    .refunds__row:not(:first-child) .refunds__col {
        position: relative;
        vertical-align: top;
        padding: 16px 12px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #1A1D1F;
    }

    body.dark .refunds__row:not(:first-child) .refunds__col {
        color: #FCFCFC;
    }

    @media only screen and (max-width: 767px) {
        .refunds__row:not(:first-child) .refunds__col {
            padding: 0;
        }
    }

    .refunds__row:not(:first-child) .refunds__col:after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        height: 1px;
        background: #EFEFEF;
    }

    @media only screen and (max-width: 767px) {
        .refunds__row:not(:first-child) .refunds__col:after {
            display: none;
        }
    }

    body.dark .refunds__row:not(:first-child) .refunds__col:after {
        background: #272B30;
    }

    .refunds__row:not(:first-child) .refunds__col:first-child:after {
        left: 12px;
    }

    .refunds__row:not(:first-child) .refunds__col:not(:first-child) {
        padding-top: 22px;
    }

    @media only screen and (max-width: 767px) {
        .refunds__row:not(:first-child) .refunds__col:not(:first-child) {
            padding: 0;
        }
    }

    .refunds__row:not(:first-child) .refunds__col:last-child:after {
        right: 12px;
    }

    @media only screen and (min-width: 768px) {
        .refunds__row:not(:first-child):hover {
            background: #F4F4F4;
        }

        body.dark .refunds__row:not(:first-child):hover {
            background: #272B30;
        }
    }

    @media only screen and (max-width: 767px) {
        .refunds__row:not(:first-child):not(:last-child) {
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .refunds__row:not(:first-child):not(:last-child) {
            border-color: #272B30;
        }
    }

    .refunds__col {
        display: table-cell;
        padding: 4px 12px 16px;
    }

    @media only screen and (max-width: 767px) {
        .refunds__col {
            padding: 0;
        }
    }

    .refunds__col:first-child {
        border-radius: 8px 0 0 8px;
    }

    @media only screen and (max-width: 767px) {
        .refunds__col:first-child {
            margin-right: auto;
        }
    }

    @media only screen and (max-width: 767px) {
        .refunds__col:nth-child(2) {
            display: none;
        }
    }

    @media only screen and (max-width: 1023px) {
        .refunds__col:nth-child(3) {
            display: none;
        }
    }

    .refunds__col:last-child {
        border-radius: 0 8px 8px 0;
    }

    .refunds__item {
        display: flex;
        align-items: center;
    }

    .refunds__item .refunds__new,
    .refunds__item .refunds__progress {
        display: none;
    }

    @media only screen and (max-width: 767px) {

        .refunds__item .refunds__new,
        .refunds__item .refunds__progress {
            display: inline-block;
        }
    }

    .refunds__preview {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    .refunds__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .refunds__product {
        max-width: 170px;
        margin-bottom: 4px;
        font-size: 15px;
    }

    .refunds__category {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    @media only screen and (max-width: 767px) {
        .refunds__category {
            display: none;
        }
    }

    .refunds__new,
    .refunds__progress {
        display: inline-block;
        padding: 2px 8px;
        border-radius: 6px;
        white-space: nowrap;
    }

    body.dark .refunds__new,
    body.dark .refunds__progress {
        color: #111315;
    }

    .refunds__new {
        background: #B5E4CA;
    }

    .refunds__progress {
        background: #CABDFF;
    }

    .refunds__user {
        display: flex;
        align-items: center;
        margin-top: -2px;
    }

    @media only screen and (max-width: 767px) {
        .refunds__user {
            font-size: 0;
        }
    }

    .refunds__avatar {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        margin-right: 12px;
    }

    @media only screen and (max-width: 767px) {
        .refunds__avatar {
            margin-right: 0;
        }
    }

    .refunds__avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .refunds__foot {
        margin-top: 12px;
        text-align: center;
    }

    @media only screen and (max-width: 767px) {
        .refunds__foot {
            margin-top: 32px;
        }
    }

    .refunds__foot .refunds__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    .description__title {
        margin-bottom: 24px;
    }

    .description__row {
        display: flex;
    }

    @media only screen and (max-width: 1023px) {
        .description__row {
            display: block;
        }
    }

    .description__col {
        flex: 0 0 50%;
    }

    .description__col:first-child {
        padding: 24px;
        border-radius: 12px;
        background: rgba(244, 244, 244, 0.5);
    }

    @media only screen and (max-width: 1023px) {
        .description__col:first-child {
            margin-bottom: 48px;
        }
    }

    @media only screen and (max-width: 767px) {
        .description__col:first-child {
            margin-bottom: 32px;
            padding: 16px;
        }
    }

    body.dark .description__col:first-child {
        background: #272B30;
    }

    .description__col:nth-child(2) {
        padding: 30px 0 0 24px;
    }

    @media only screen and (max-width: 1023px) {
        .description__col:nth-child(2) {
            padding: 0;
        }
    }

    .description__product {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
    }

    .description__preview {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    .description__preview img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .description__subtitle {
        margin-bottom: 8px;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .description__subtitle {
            font-size: 18px;
        }
    }

    .description__category {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .description__new,
    .description__progress {
        display: inline-block;
        padding: 2px 8px;
        border-radius: 6px;
        white-space: nowrap;
    }

    .description__new {
        background: #B5E4CA;
    }

    body.dark .description__new {
        color: #1A1D1F;
    }

    .description__progress {
        background: #CABDFF;
    }

    .description__parameters li {
        display: flex;
        align-items: center;
        padding: 16px 0;
        border-bottom: 1px solid rgba(17, 19, 21, 0.1);
    }

    body.dark .description__parameters li {
        border-color: rgba(111, 118, 126, 0.15);
    }

    .description__label {
        margin-right: auto;
        padding-right: 12px;
        color: #6F767E;
    }

    .description .tooltip {
        position: relative;
        top: -1px;
    }

    .description .tooltip .icon {
        fill: #6F767E;
    }

    .description__yes,
    .description__no {
        display: inline-block;
        padding: 2px 8px;
        border-radius: 6px;
        white-space: nowrap;
    }

    body.dark .description__yes,
    body.dark .description__no {
        color: #1A1D1F;
    }

    .description__yes {
        background: #B5E4CA;
    }

    .description__no {
        background: #FFBC99;
    }

    .description__content {
        text-align: right;
    }

    .description__btns {
        display: flex;
        margin: 24px -4px 0;
    }

    .description__btns .description__button {
        flex: 0 0 calc(50% - 8px);
        width: calc(50% - 8px);
        margin: 0 4px;
    }

    @media only screen and (max-width: 767px) {
        .description__btns .description__button {
            padding: 0 8px;
        }
    }

    body.dark .description__btns .description__button:first-child {
        background: #111315;
        box-shadow: inset 0 0 0 2px #111315;
    }

    body.dark .description__btns .description__button:first-child:hover {
        box-shadow: inset 0 0 0 2px #FCFCFC;
    }

    .description__box:not(:last-child) {
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 1px solid rgba(17, 19, 21, 0.1);
    }

    .description__info {
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .description__info {
            font-size: 18px;
        }
    }

    .description__list li {
        position: relative;
        padding-left: 36px;
        font-weight: 500;
        color: #33383F;
    }

    body.dark .description__list li {
        color: #EFEFEF;
    }

    .description__list li:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 24px;
        height: 24px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'%3E%3Cpath fill-rule='evenodd' d='M20.707 6.293a1 1 0 0 1 0 1.414l-8.586 8.586a3 3 0 0 1-4.243 0l-3.586-3.586a1 1 0 0 1 1.414-1.414l3.586 3.586a1 1 0 0 0 1.414 0l8.586-8.586a1 1 0 0 1 1.414 0z' fill='%23b5e4ca'/%3E%3C/svg%3E") no-repeat 50% 50%/100% auto;
    }

    .description__list li:not(:last-child) {
        margin-bottom: 12px;
        padding-bottom: 12px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .description__list li:not(:last-child) {
        border-color: #272B30;
    }

    .description__comment {
        margin-bottom: 12px;
        font-weight: 500;
        color: #33383F;
    }

    body.dark .description__comment {
        color: #EFEFEF;
    }

    .description__user {
        display: flex;
        align-items: center;
    }

    .description__avatar {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        margin-right: 12px;
    }

    .description__avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .description .editor {
        margin-top: 32px;
    }

    @media only screen and (max-width: 767px) {
        .description .editor {
            margin-top: 24px;
        }
    }

    .balance {
        display: flex;
    }

    @media only screen and (max-width: 1023px) {
        .balance {
            display: block;
        }
    }

    .balance__list {
        display: flex;
        justify-content: space-between;
        flex-grow: 1;
        margin-right: 64px;
    }

    @media only screen and (max-width: 1259px) {
        .balance__list {
            margin-right: 48px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .balance__list {
            display: block;
            margin: 0 0 32px;
        }
    }

    .balance__item {
        display: flex;
        padding: 0 64px;
        border-right: 1px solid #EFEFEF;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 1419px) {
        .balance__item {
            padding: 0 48px;
        }
    }

    @media only screen and (max-width: 1339px) {
        .balance__item {
            padding: 0 32px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .balance__item {
            padding: 0;
            border: none;
        }
    }

    body.dark .balance__item {
        border-color: #272B30;
        color: #FCFCFC;
    }

    .balance__item:first-child {
        padding-left: 0;
    }

    @media only screen and (max-width: 1023px) {
        .balance__item:not(:last-child) {
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .balance__item:not(:last-child) {
            border-color: #272B30;
        }
    }

    .balance__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        margin-right: 24px;
        border-radius: 50%;
    }

    .balance__icon .icon {
        width: 24px;
        height: 24px;
        fill: #1A1D1F;
    }

    .balance__label {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #6F767E;
    }

    .balance .tooltip .icon {
        fill: #6F767E;
    }

    .balance__counter {
        font-size: 48px;
        font-weight: 600;
        line-height: 1;
        letter-spacing: -.03em;
    }

    @media only screen and (max-width: 1339px) {
        .balance__counter {
            font-size: 40px;
        }
    }

    .balance__button {
        flex-shrink: 0;
    }

    @media only screen and (max-width: 767px) {
        .balance__button {
            width: 100%;
        }
    }

    .success {
        padding: 60px 0 24px;
        text-align: center;
    }

    @media only screen and (max-width: 767px) {
        .success {
            padding: 32px 0 16px;
        }
    }

    .success__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 128px;
        height: 128px;
        margin: 0 auto 20px;
        border-radius: 50%;
        background: #B5E4CA;
        font-size: 48px;
    }

    .success__info {
        margin-bottom: 8px;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
        color: #33383F;
    }

    @media only screen and (max-width: 767px) {
        .success__info {
            font-size: 18px;
        }
    }

    body.dark .success__info {
        color: #EFEFEF;
    }

    .success__price {
        margin-bottom: 16px;
    }

    @media only screen and (max-width: 767px) {
        .success__price {
            font-size: 40px;
        }
    }

    .success__text {
        margin-bottom: 20px;
        color: #6F767E;
    }

    .success__text span {
        color: #1A1D1F;
    }

    body.dark .success__text span {
        color: #FCFCFC;
    }

    .payout__wrapper {
        margin: 0 -24px;
        background: #FCFCFC;
    }

    @media only screen and (max-width: 767px) {
        .payout__wrapper {
            margin: 0 -16px;
        }
    }

    body.dark .payout__wrapper {
        background: transparent;
    }

    .payout__table {
        display: table;
        width: 100%;
    }

    .payout__row {
        display: table-row;
    }

    .payout__row:first-child .payout__col {
        padding-top: 12px;
        padding-bottom: 16px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #6F767E;
    }

    .payout__row:nth-child(2n) .payout__col {
        background: rgba(239, 239, 239, 0.35);
    }

    body.dark .payout__row:nth-child(2n) .payout__col {
        background: rgba(39, 43, 48, 0.5);
    }

    .payout__col {
        display: table-cell;
        padding: 10px 16px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    @media only screen and (max-width: 767px) {
        .payout__col {
            padding: 12px;
        }
    }

    .payout__col:first-child {
        padding-left: 24px;
        color: #6F767E;
    }

    @media only screen and (max-width: 767px) {
        .payout__col:first-child {
            padding-left: 16px;
        }
    }

    .payout__col:last-child {
        padding-right: 24px;
    }

    @media only screen and (max-width: 767px) {
        .payout__col:last-child {
            padding-right: 16px;
            text-align: right;
        }
    }

    @media only screen and (max-width: 767px) {

        .payout__col:nth-child(2),
        .payout__col:nth-child(3) {
            display: none;
        }
    }

    .payout__status {
        font-size: 14px;
        line-height: 28px;
        font-weight: 600;
        color: #1A1D1F;
    }

    @media only screen and (max-width: 767px) {
        .transactions .card__head {
            flex-wrap: wrap;
        }

        .transactions .card__head .card__title {
            width: 100%;
            flex-grow: 1;
            margin: 0 0 16px;
        }
    }

    .transactions .card__button {
        margin-left: 16px;
    }

    @media only screen and (max-width: 767px) {
        .transactions .card__button {
            flex-grow: 1;
        }
    }

    .transactions__wrapper {
        margin: 0 -24px;
        background: #FCFCFC;
    }

    @media only screen and (max-width: 767px) {
        .transactions__wrapper {
            margin: 0 -16px;
        }
    }

    body.dark .transactions__wrapper {
        background: transparent;
    }

    .transactions__table {
        display: table;
        width: 100%;
    }

    @media only screen and (max-width: 1023px) {
        .transactions__table {
            display: block;
        }
    }

    .transactions__row {
        display: table-row;
    }

    @media only screen and (max-width: 1023px) {
        .transactions__row {
            display: flex;
            flex-direction: column;
            padding: 16px 24px;
        }
    }

    @media only screen and (max-width: 767px) {
        .transactions__row {
            padding: 16px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .transactions__row:first-child {
            display: none;
        }
    }

    .transactions__row:first-child .transactions__col {
        padding-top: 8px;
        padding-bottom: 16px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        .transactions__row:nth-child(2n) {
            background: rgba(239, 239, 239, 0.35);
        }

        body.dark .transactions__row:nth-child(2n) {
            background: rgba(39, 43, 48, 0.5);
        }
    }

    .transactions__row:nth-child(2n) .transactions__col {
        background: rgba(239, 239, 239, 0.35);
    }

    @media only screen and (max-width: 1023px) {
        .transactions__row:nth-child(2n) .transactions__col {
            background: none;
        }
    }

    body.dark .transactions__row:nth-child(2n) .transactions__col {
        background: rgba(39, 43, 48, 0.5);
    }

    @media only screen and (max-width: 1023px) {
        body.dark .transactions__row:nth-child(2n) .transactions__col {
            background: none;
        }
    }

    .transactions__col {
        display: table-cell;
        padding: 10px 16px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
    }

    @media only screen and (max-width: 1023px) {
        .transactions__col {
            display: flex;
            align-items: center;
            padding: 0;
        }
    }

    .transactions__col:first-child {
        padding-left: 24px;
    }

    @media only screen and (max-width: 1023px) {
        .transactions__col:first-child {
            padding-left: 0;
        }
    }

    @media only screen and (max-width: 1023px) {
        .transactions__col:nth-child(2) {
            align-items: flex-start;
            order: -1;
            padding-bottom: 12px;
            border-bottom: 1px solid #EFEFEF;
        }

        body.dark .transactions__col:nth-child(2) {
            border-color: #272B30;
        }
    }

    @media only screen and (max-width: 1023px) {
        .transactions__col:nth-child(3) {
            display: none;
        }
    }

    .transactions__col:last-child {
        padding-right: 24px;
    }

    @media only screen and (max-width: 1023px) {
        .transactions__col:last-child {
            padding-right: 0;
        }
    }

    @media only screen and (max-width: 1023px) {
        .transactions__col:not(:last-child) {
            margin-bottom: 12px;
        }
    }

    .transactions__status {
        flex-shrink: 0;
        white-space: nowrap;
        font-size: 14px;
        line-height: 28px;
        font-weight: 600;
        color: #1A1D1F;
    }

    .transactions__details {
        display: none;
    }

    @media only screen and (max-width: 1023px) {
        .transactions__details {
            display: block;
            margin-right: auto;
            padding-right: 16px;
        }
    }

    .transactions__product {
        color: #33383F;
    }

    body.dark .transactions__product {
        color: #EFEFEF;
    }

    .transactions__invoice {
        margin-top: 4px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1.33333;
        font-weight: 500;
        color: #6F767E;
    }

    .transactions__amount_negative {
        color: #FF6A55;
    }

    .transactions__foot {
        padding: 12px 0;
        text-align: center;
    }

    .transactions__foot .transactions__button .loader {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        margin: 0 18px 0 8px;
    }

    .transactions__label {
        display: none;
        margin-right: auto;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71429;
        color: #6F767E;
    }

    @media only screen and (max-width: 1023px) {
        .transactions__label {
            display: block;
        }
    }

    .shop__background {
        height: 100%;

    }

    @media only screen and (max-width: 1339px) {
        .shop__background {
            margin: -32px -24px 0;
        }
    }

    @media only screen and (max-width: 1259px) {
        .shop__background {
            height: 320px;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__background {
            height: 252px;
            margin: -24px -16px 0;
        }
    }

    .shop__background img {
        width: 1279px;
        height: 394px;
        -o-object-fit: cover;
        object-fit: cover;
        margin-top: -25px;

    }

    .shop .card {
        max-width: 1200px;
        margin: -64px auto 0;
    }

    @media only screen and (max-width: 767px) {
        .shop .card {
            margin-top: -188px;
        }
    }

    .shop__profile {
    display: flex;
    align-items: flex-start;
    margin-bottom: 5%;
    padding-bottom: 0px;
    border-bottom: 1px solid #EFEFEF;
}

    @media only screen and (max-width: 1259px) {
        .shop__profile {
            margin-bottom: 32px;
            padding-bottom: 32px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .shop__profile {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__profile {
            margin-bottom: 32px;
            padding-bottom: 32px;
        }
    }

    body.dark .shop__profile {
        border-color: #272B30;
    }

    .shop__details {
        display: flex;
        align-items: center;
        flex-grow: 1;
    }

    @media only screen and (max-width: 1023px) {
        .shop__details {
            margin-bottom: 16px;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__details {
            margin-bottom: 12px;
        }
    }

    .shop__avatar {
        position: relative;
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 16px;
    }

    .shop__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    .shop__add {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 24px;
        height: 24px;
        border: 2px solid #FFFFFF;
        border-radius: 50%;
        background: #2A85FF;
        font-size: 0;
        transition: background .2s;
    }

    .shop__add .icon {
        display: none;
        fill: #FFFFFF;
        margin-left: 1px;
    }

    .shop__add:hover {
        background: #1176ff;
    }

    @media only screen and (max-width: 767px) {
        .shop__man {
            font-size: 20px;
        }
    }

    .shop__info {
        margin-top: 8px;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
        color: #6F767E;
    }

    @media only screen and (max-width: 767px) {
        .shop__info {
            font-size: 18px;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__info {
            margin-top: 4px;
            font-size: 15px;
        }
    }

    .shop__contacts {
        display: flex;
        align-items: center;
        flex-shrink: 0;
        margin-left: 40px;
    }

    @media only screen and (max-width: 1023px) {
        .shop__contacts {
            margin-left: 0;
        }
    }

    .shop__socials {
        display: flex;
        align-items: center;
    }

    .shop__social .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .shop__social:hover .icon {
        fill: #2A85FF;
    }

    .shop__social:not(:last-child) {
        margin-right: 32px;
    }

    .shop__contacts .shop__button {
        margin-left: 32px;
    }

    @media only screen and (max-width: 1023px) {
        .shop__contacts .shop__button {
            margin-left: auto;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__contacts .shop__button {
            min-width: 132px;
        }
    }

    .shop__control {
        display: flex;
        align-items: center;
        margin-bottom: 32px;
    }

    @media only screen and (max-width: 767px) {
        .shop__control {
            flex-wrap: wrap;
        }
    }

    .shop__nav {
        display: flex;
        margin-right: auto;
    }

    @media only screen and (max-width: 767px) {
        .shop__nav {
            width: 100%;
            margin: 0 0 16px;
        }
    }

    .shop__nav .shop__link {
        padding: 8px 16px;
        border-radius: 8px;
        text-align: center;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    @media only screen and (max-width: 767px) {
        .shop__nav .shop__link {
            flex-grow: 1;
        }
    }

    .shop__nav .shop__link:hover,
    .shop__nav .shop__link.active {
        color: #1A1D1F;
    }

    body.dark .shop__nav .shop__link:hover,
    body.dark .shop__nav .shop__link.active {
        color: #FCFCFC;
    }

    .shop__nav .shop__link.active {
        background: #EFEFEF;
    }

    body.dark .shop__nav .shop__link.active {
        background: #272B30;
    }

    .shop__nav .shop__link:not(:last-child) {
        margin-right: 8px;
    }

    @media only screen and (max-width: 767px) {
        .shop__nav .shop__link:not(:last-child) {
            margin-right: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__select {
            flex-grow: 1;
        }
    }

    .shop .filters {
        margin-left: 16px;
    }

    @media only screen and (max-width: 767px) {
        .shop .filters {
            margin-left: 12px;
        }
    }

    .shop__products {
        display: flex;
        flex-wrap: wrap;
        margin: -32px -12px 0;
    }

    @media only screen and (max-width: 639px) {
        .shop__products {
            display: block;
            margin: 0;
        }
    }

    .shop .summary {
        flex: 0 0 calc(33.333% - 24px);
        width: calc(33.333% - 24px);
        margin: 32px 12px 0;
    }

    @media only screen and (max-width: 1023px) {
        .shop .summary {
            flex: 0 0 calc(50% - 24px);
            width: calc(50% - 24px);
        }
    }

    @media only screen and (max-width: 639px) {
        .shop .summary {
            width: 100%;
            margin: 24px 0 0;
        }
    }

    .shop__foot {
        margin-top: 40px;
        text-align: center;
    }

    @media only screen and (max-width: 1339px) {
        .shop__foot {
            margin-top: 32px;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__foot {
            margin-top: 24px;
        }
    }

    .follower {
        display: flex;
        align-items: flex-start;
        padding-bottom: 24px;
    }

    .follower:not(:last-child) {
        margin-bottom: 24px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .follower:not(:last-child) {
        border-color: #272B30;
    }

    .follower__details {
        display: flex;
        padding-right: 24px;
        flex-grow: 1;
    }

    @media only screen and (max-width: 1023px) {
        .follower__details {
            padding-right: 0;
        }
    }

    .follower__avatar {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 16px;
    }

    @media only screen and (max-width: 767px) {
        .follower__avatar {
            width: 64px;
            height: 64px;
        }
    }

    .follower__avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .follower__man {
        margin-bottom: 4px;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .follower__man {
            font-size: 18px;
        }
    }

    .follower__list {
        display: flex;
        align-items: center;
    }

    .follower__counter {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .follower__counter span {
        color: #6F767E;
    }

    .follower__counter:not(:first-child) {
        position: relative;
        margin-left: 12px;
        padding-left: 14px;
    }

    .follower__counter:not(:first-child):before {
        content: "";
        position: absolute;
        top: 5px;
        left: 0;
        width: 2px;
        height: 8px;
        border-radius: 2px;
        background: #EFEFEF;
    }

    body.dark .follower__counter:not(:first-child):before {
        background: #272B30;
    }

    .follower__gallery {
        display: flex;
        flex-wrap: wrap;
        flex-shrink: 0;
        width: 480px;
        margin: -12px -6px 0 0;
    }

    @media only screen and (max-width: 1023px) {
        .follower__gallery {
            display: none;
        }
    }

    .follower__preview {
        flex: 0 0 calc(33.333% - 12px);
        width: calc(33.333% - 12px);
        height: 116px;
        margin: 12px 6px 0;
    }

    .follower__preview img {
        width: 100%;
        height: 100%;
        border-radius: 12px;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .follower__preview:nth-child(n+4) {
        display: none;
    }

    .follower__btns {
        display: flex;
        margin-top: 16px;
    }

    .follower__btns .follower__button_follow span {
        display: none;
    }

    .follower__btns .follower__button_follow.active {
        box-shadow: inset 0 0 0 2px #EFEFEF;
        background: #EFEFEF;
    }

    body.dark .follower__btns .follower__button_follow.active {
        box-shadow: inset 0 0 0 2px #33383F;
        background: #272B30;
    }

    .follower__btns .follower__button_follow.active span {
        display: inline;
    }

    .follower__btns .follower__button:not(:last-child) {
        margin-right: 8px;
    }


    .title-green {
        color: #4caf50;
        font-size: 18px;
        margin-bottom: 15px;
    }

    .fav-products__grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .no-background {
        background-color: transparent;
        border: none;
    }

    .fav-products__card.no-background {
        border: none;
    }

    .fav-products__image {
        width: 144px;
        object-fit: cover;
        margin-bottom: 15px;
    }

    .fav-products__name {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 10px;
    }



    .fav-products__button {
        display: inline-block;
        background-color: color(xyz-d50 0.6 0.62 0.51 / 0.28);
        color: #755050;
        text-decoration: solid;
        padding: 3px 8px;
        border-radius: 15px;
        font-weight: lighter;
        margin-inline: 20px;
    }



    .fav-products__button:hover {
        background-color: #3e8e41;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination__button {
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-weight: 500;
        border: none;
        cursor: pointer;
        margin: 0 5px;
    }

    .pagination__button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }

    .title-custom {
        color: #4caf50;
        margin-bottom: 425px;
    }

    .icon {
        margin-left: 0.5rem;
    }

    .tooltip {
        display: none;
    }

    .button-stroke {
        border: 1px solid #000;
        background-color: transparent;
        cursor: pointer;
    }

    .custom_pricing-plans {
        display: flex;
        justify-content: center;
        margin-top: 100px;
    }

    .custom_pricing-plans__grid {
        display: inline-flex;
        justify-content: space-between;
        width: 885px;
        margin-top: 87px;
        margin-left: -119px;
        border-radius: 8px;

    }

    .custom_pricing-plans__card {
        background-color: #2c3e50;
        color: #f1c40f;
        margin: 10px;
        padding: 15px;
        box-sizing: border-box;
        width: calc(33.3333% - 20px);
        height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        outline: none;
        border: 1.5px solid #5fc38f;
        /* Borda amarela para os cards não selecionados */
    }

    .custom_pricing-plans__card:focus {
        border-color: #e74c3c;
        /* Borda vermelha quando o card está focado */
    }

    .custom_pricing-plans__name {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .custom_pricing-plans__price {
        font-size: 1rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .custom_pricing-plans__description {
        margin-bottom: 1rem;
    }

    .custom_pricing-plans__button {
        background-color: #f1c40f;
        color: #2c3e50;
        border-color: #f1c40f;
        cursor: pointer;
    }

    .custom_pricing-plans__button:hover {
        background-color: #f39c12;
        border-color: #f39c12;
    }

    .shadow-sm {
        --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, .05);
        --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
        --tw-bg-opacity: 1;
        background-color: rgb(24 24 27/var(--tw-bg-opacity));
        --tw-border-opacity: 1;
        border-color: rgb(236 72 153/var(--tw-border-opacity));
        border-radius: 0.5rem;

        border-width: 1px;


    }

    .custom_pricing-plans__name,
    .custom_pricing-plans__price {
        color: #f1c40f;
    }

    @media screen and (max-width: 375px) {
        .page__inner {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-top: 0;
            margin-left: 0;
        }

        .page__container {
            width: 100%;
            margin-top: 0;
            margin-left: 0;
        }

        .settings {

            padding: 0px 0px;

        }

        .settings__container {
            width: 100%;
            margin-top: 0;
            margin-left: 0;
        }

        .settings__wrapper {
            padding-left: 0;
            display: calc(100% - 20px);

        }

        .shop__background {
            display: flex;
        }

        .shop__background img {
            width: 1332px;
            height: 396px;
            -o-object-fit: cover;
            object-fit: cover;
            margin-top: -26px;
            margin-left: -23px;
        }

        .shop .card {
            margin-top: -126px;
        }

        .shop__details {
            margin-bottom: 12px;
            display: flex;

        }

        .shop__avatar {
            position: static;
            flex-shrink: initial;
            width: 82px;
            height: 80px;
            margin-right: 25px;
        }

        .button__cep {
            margin-bottom: 1rem;
            margin-inline: 166px;
            margin-right: -6px;
            margin-top: -50px;
            padding-inline: 2px;
            place-self: start;
            display: table-cell;
            height: 45px;
            padding: 8px 22px;
            background: #2A85FF;
            border-radius: 27px;
            font-size: 15px;
            font-weight: bolder;
            line-height: 1.0;
            text-align: end;
            color: #F4F4F4;
            transition: all .2s;
        }

        .cep {
            display: flex;
            flex-direction: column;
        }

        .field__wrap {
            display: flex;
            flex-direction: column;
            margin-bottom: -10px;
        }

        .no-background {
            background-color: transparent;
            border: none;
        }

        .fav-products__card.no-background {
            border: none;
        }

        .fav-products__grid {
            display: inline-grid;
            grid-template-columns: repeat(2, 1fr);
            width: 350px;
        }

        .fav-products__details {

            background-color: transparent;

        }

        .settings__produtos {
            display: flex;
            flex-direction: column;
            margin-top: 0;
            margin-left: 0;
            margin-right: 0;
            margin-bottom: -500px;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: #F4F4F4;
            border-radius: 8px;
            padding: 1rem;
            transform: translate3d(0, 0, 0);
        }





    }


    .shop__background {
        height: 100%;

    }

    @media only screen and (max-width: 1339px) {
        .shop__background {
            margin: -32px -24px 0;
        }
    }

    @media only screen and (max-width: 1259px) {
        .shop__background {
            height: 320px;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__background {
            height: 252px;
            margin: -24px -16px 0;
        }
    }

    .shop__background img {
        width: 1332px;
        height: 396px;
        -o-object-fit: cover;
        object-fit: cover;
        margin-top: -26px;
        margin-left: -23px;
    }

    .shop .card {
        max-width: 97.5%;
        margin: -15% auto 0;

    }

    @media only screen and (max-width: 767px) {
        .shop .card {
            margin-top: -188px;
        }
    }

  

    @media only screen and (max-width: 1259px) {
        .shop__profile {
            margin-bottom: 32px;
            padding-bottom: 32px;
        }
    }

    @media only screen and (max-width: 1023px) {
        .shop__profile {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__profile {
            margin-bottom: 32px;
            padding-bottom: 32px;
        }
    }

    body.dark .shop__profile {
        border-color: #272B30;
    }

    .shop__details {
        display: flex;
        align-items: center;
        flex-grow: 1;
    }

    @media only screen and (max-width: 1023px) {
        .shop__details {
            margin-bottom: 16px;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__details {
            margin-bottom: 12px;
        }
    }

    .shop__avatar {
        position: relative;
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 16px;
    }

    .shop__avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    .shop__add {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 24px;
        height: 24px;
        border: 2px solid #FFFFFF;
        border-radius: 50%;
        background: #2A85FF;
        font-size: 0;
        transition: background .2s;
    }

    .shop__add .icon {
        display: none;
        fill: #FFFFFF;
        margin-left: 1px;
    }

    .shop__add:hover {
        background: #1176ff;
    }

    @media only screen and (max-width: 767px) {
        .shop__man {
            font-size: 20px;
        }
    }

    .shop__info {
        margin-top: 8px;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
        color: #6F767E;
    }

    @media only screen and (max-width: 767px) {
        .shop__info {
            font-size: 18px;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__info {
            margin-top: 4px;
            font-size: 15px;
        }
    }

    .shop__contacts {
        display: flex;
        align-items: center;
        flex-shrink: 0;
        margin-left: 40px;
    }

    @media only screen and (max-width: 1023px) {
        .shop__contacts {
            margin-left: 0;
        }
    }

    .shop__socials {
        display: flex;
        align-items: center;
    }

    .shop__social .icon {
        width: 24px;
        height: 24px;
        fill: #6F767E;
        transition: fill .2s;
    }

    .shop__social:hover .icon {
        fill: #2A85FF;
    }

    .shop__social:not(:last-child) {
        margin-right: 32px;
    }

    .shop__contacts .shop__button {
        margin-left: 32px;
    }

    @media only screen and (max-width: 1023px) {
        .shop__contacts .shop__button {
            margin-left: auto;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__contacts .shop__button {
            min-width: 132px;
        }
    }

    .shop__control {
        display: flex;
        align-items: center;
        margin-bottom: 32px;
    }

    @media only screen and (max-width: 767px) {
        .shop__control {
            flex-wrap: wrap;
        }
    }

    .shop__nav {
        display: flex;
        margin-right: auto;
    }

    @media only screen and (max-width: 767px) {
        .shop__nav {
            width: 100%;
            margin: 0 0 16px;
        }
    }

    .shop__nav .shop__link {
        padding: 8px 16px;
        border-radius: 8px;
        text-align: center;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.6;
        color: #6F767E;
        transition: all .2s;
    }

    @media only screen and (max-width: 767px) {
        .shop__nav .shop__link {
            flex-grow: 1;
        }
    }

    .shop__nav .shop__link:hover,
    .shop__nav .shop__link.active {
        color: #1A1D1F;
    }

    .body.dark .shop__nav .shop__link:hover,
    .body.dark .shop__nav .shop__link.active {
        color: #FCFCFC;
    }

    .shop__nav .shop__link.active {
        background: #EFEFEF;
    }

    body.dark .shop__nav .shop__link.active {
        background: #272B30;
    }

    .shop__nav .shop__link:not(:last-child) {
        margin-right: 8px;
    }

    @media only screen and (max-width: 767px) {
        .shop__nav .shop__link:not(:last-child) {
            margin-right: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__select {
            flex-grow: 1;
        }
    }

    .shop .filters {
        margin-left: 16px;
    }

    @media only screen and (max-width: 767px) {
        .shop .filters {
            margin-left: 12px;
        }
    }

    .shop__products {
        display: flex;
        flex-wrap: wrap;
        margin: -32px -12px 0;
    }

    @media only screen and (max-width: 639px) {
        .shop__products {
            display: block;
            margin: 0;
        }
    }

    .shop .summary {
        flex: 0 0 calc(33.333% - 24px);
        width: calc(33.333% - 24px);
        margin: 32px 12px 0;
    }

    @media only screen and (max-width: 1023px) {
        .shop .summary {
            flex: 0 0 calc(50% - 24px);
            width: calc(50% - 24px);
        }
    }

    @media only screen and (max-width: 639px) {
        .shop .summary {
            width: 100%;
            margin: 24px 0 0;
        }
    }

    .shop__foot {
        margin-top: 40px;
        text-align: center;
    }

    @media only screen and (max-width: 1339px) {
        .shop__foot {
            margin-top: 32px;
        }
    }

    @media only screen and (max-width: 767px) {
        .shop__foot {
            margin-top: 24px;
        }
    }

    .follower {
        display: flex;
        align-items: flex-start;
        padding-bottom: 24px;
    }

    .follower:not(:last-child) {
        margin-bottom: 24px;
        border-bottom: 1px solid #EFEFEF;
    }

    body.dark .follower:not(:last-child) {
        border-color: #272B30;
    }

    .follower__details {
        display: flex;
        padding-right: 24px;
        flex-grow: 1;
    }

    @media only screen and (max-width: 1023px) {
        .follower__details {
            padding-right: 0;
        }
    }

    .follower__avatar {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        margin-right: 16px;
    }

    @media only screen and (max-width: 767px) {
        .follower__avatar {
            width: 64px;
            height: 64px;
        }
    }

    .follower__avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .follower__man {
        margin-bottom: 4px;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        letter-spacing: -.02em;
    }

    @media only screen and (max-width: 767px) {
        .follower__man {
            font-size: 18px;
        }
    }

    .follower__list {
        display: flex;
        align-items: center;
    }

    .follower__counter {
        font-size: 13px;
        font-weight: 600;
        line-height: 1.23077;
        color: #9A9FA5;
    }

    .follower__counter span {
        color: #6F767E;
    }

    .follower__counter:not(:first-child) {
        position: relative;
        margin-left: 12px;
        padding-left: 14px;
    }

    .follower__counter:not(:first-child):before {
        content: "";
        position: absolute;
        top: 5px;
        left: 0;
        width: 2px;
        height: 8px;
        border-radius: 2px;
        background: #EFEFEF;
    }

    body.dark .follower__counter:not(:first-child):before {
        background: #272B30;
    }

    .follower__gallery {
        display: flex;
        flex-wrap: wrap;
        flex-shrink: 0;
        width: 480px;
        margin: -12px -6px 0 0;
    }

    @media only screen and (max-width: 1023px) {
        .follower__gallery {
            display: none;
        }
    }

    .follower__preview {
        flex: 0 0 calc(33.333% - 12px);
        width: calc(33.333% - 12px);
        height: 116px;
        margin: 12px 6px 0;
    }

    .follower__preview img {
        width: 100%;
        height: 100%;
        border-radius: 12px;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .follower__preview:nth-child(n+4) {
        display: none;
    }

    .follower__btns {
        display: flex;
        margin-top: 16px;
    }

    .follower__btns .follower__button_follow span {
        display: none;
    }

    .follower__btns .follower__button_follow.active {
        box-shadow: inset 0 0 0 2px #EFEFEF;
        background: #EFEFEF;
    }

    body.dark .follower__btns .follower__button_follow.active {
        box-shadow: inset 0 0 0 2px #33383F;
        background: #272B30;
    }

    .follower__btns .follower__button_follow.active span {
        display: inline;
    }

    .follower__btns .follower__button:not(:last-child) {
        margin-right: 8px;
    }
</style>

        </head>
        
        
             <div id="nav" >
            <?php
            require("components/navBar.php");

            ?>
        </div>
    </div>



<div id="dash"></div>
<div class="settings__wrapper">
    <div class="settings__list">
        <div class="settings__item">
            <div class="settings__anchor" id="basics" data-value="Basics"></div>
            <div class="shop">
                <div class="shop__background">
                </div>
                <div class="shop__tabs card js-tabs">
                    <div class="shop__profile">
                        <div class="shop__details">
                            <div class="shop__avatar"><img src="assets/avatar.jpg" alt="Avatar">

                            </div>
                            <div class="shop__wrap">
                                <div class="h4 shop__man">Chelsie Haley</div>
                                <div class="shop__info">Você não tem nenhum plano!</div>
                            </div>
                        </div>
                       
                    </div>
                    
                 <div class="title-green settings__title">Informações Pessoais</div>
                    <div class="settings__fieldset">
                        <div class="field">
                            <div class="field__label">Seu Nome
                                <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="field__wrap">
                                <input class="field__input" type="text" name="display-name">
                            </div>
                        </div>
                        <div class="field">
                            <div class="field__label">Email
                                <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="field__wrap">
                                <input class="field__input" type="email" name="email">
                            </div>
                        </div>
                        <div class="endereco">
                            <label class="endereco__label">Endereço</label>

                            <div class="field__wrap">
                                <input class="endereco__input" type="text" name="location1" placeholder="CEP">
                                <input class="endereco__input" type="text" name="location2" placeholder="Cidade">
                                <input class="endereco__input" type="text" name="location3" placeholder="Bairro">
                                <input class="endereco__input" type="text" name="location4" placeholder="Rua">
                                <input class="endereco__input" type="text" name="location5" placeholder="Número">
                                <input class="endereco__input" type="text" name="location6" placeholder="Complemento">
                                <input class="endereco__input" type="text" name="location7" placeholder="Estado">
                            </div>


                        </div>
                        <div class="settings__item">

                            <div class="title-green settings__title">Alterar Senha</div>

                            <div class="field">
                                <div class="field__label">Digite sua senha atual</div>
                                <input class="endereco__input" type="password" name="old-password"
                                    placeholder="Senha Antiga">

                                <div class="field">
                                    <div class="field__label">Digite sua nova senha </div>
                                    <input class="endereco__input" type="password" name="new-password"
                                        placeholder="Nova Senha">


                                    <div class="field">
                                        <div class="field__label">Confirme sua nova senha</div>

                                        <input class="endereco__input" type="password" name="new-password"
                                            placeholder="Confirmar Senha">
                                    </div>
                                    <button class="botao__senha">Atualizar senha</button>
                                    </div>
        
            </div>
            </div>  
     </script>