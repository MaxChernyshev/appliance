<!DOCTYPE html>
<html ⚡ lang="en">
<head>
    <meta charset="utf-8">
    <link rel="canonical" href="template.html">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $location->seo_description ?? 'Our company «Appliance Repairmen» provides quality, all-inclusive, professional 24-hour overhaul. Repair of domestic and commercial appliances on the same day near you.' }}">
    <title>{{ $location->seo_title ?? 'Household appliance repair | Appliance repairs at your home | Certified small repair of appliances' }}</title>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <style amp-boilerplate>
        body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
    <noscript>
        <style amp-boilerplate>
            body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}
        </style>
    </noscript>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" type="text/css"/>

    <style amp-custom>
      body {
            width: auto;
            margin: 0;
            padding: 0;
            background: lightgrey;
            font-family: "Lato", Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }
        
        .headerbar {
            background: #ffffff;
            height: 50px;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        
        .hamburger,
        .site-name {
            flex: 1 1 auto;
            padding: 10px;
        }
        
        amp-sidebar,
        amp-sidebar .submenu {
            width: 100%;
            height: 100%;
        }
        
        amp-sidebar .main-menu,
        amp-sidebar .submenu {
            overflow: auto;
        }
        
        amp-sidebar .submenu {
            top: 0;
            left: 0;
            position: fixed;
        }
        
        amp-sidebar .hide-submenu {
            visibility: hidden;
            transform: translateX(-100%);
        }
        
        amp-sidebar .show-submenu {
            visibility: visible;
            transform: translateX(0);
        }
        
        amp-sidebar .hide-parent {
            visibility: hidden;
        }
        
        amp-sidebar .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        amp-sidebar .link-container {
            display: block;
            height: 44px;
            line-height: 44px;
            border-bottom: 1px solid #f0f0f0;
            padding: 0 1rem;
        }
        
        amp-sidebar a {
            min-width: 44px;
            min-height: 44px;
            text-decoration: none;
            cursor: pointer;
        }
        
        amp-sidebar .submenu-icon {
            padding-right: 44px;
        }
        
        amp-sidebar .submenu-icon::after {
            position: absolute;
            right: 0;
            height: 44px;
            width: 44px;
            content: '';
            background-size: 1rem;
            background-image: url('data:image/svg+xml;utf8, <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>');
            background-repeat: no-repeat;
            background-position: center;
        }
        
        amp-sidebar .controls {
            display: flex;
            height: 50px;
            background: #f0f0f0;
        }
        
        amp-sidebar .controls a {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        amp-sidebar .controls span {
            line-height: 50px;
            margin: 0 auto;
        }
        
        amp-sidebar nav>.controls>a:first-of-type {
            visibility: hidden;
        }
        
        amp-sidebar .controls a svg {
            height: 1rem;
            width: 1rem;
        }
        
        amp-sidebar .link-icon {
            float: left;
            height: 44px;
            margin-right: 0.75rem;
        }
        
        amp-sidebar .link-icon>svg {
            height: 44px;
        }
        
        amp-sidebar {
            background: #fff;
            color: #232323;
            fill: #232323;
            text-transform: uppercase;
            letter-spacing: 0.18rem;
            font-size: 0.875rem;
        }
        
        amp-sidebar a {
            color: #232323;
            text-transform: none;
            letter-spacing: normal;
        }
        
        div[class*="-sidebar-mask"] {
            opacity: 0.8;
        }
        
        amp-sidebar a:hover {
            text-decoration: underline;
            fill: #232323;
        }
        
        amp-sidebar .view-all {
            font-style: italic;
            font-weight: bold;
        }
        :root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}footer,header,main,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}[tabindex="-1"]:focus:not(:focus-visible){outline:0}hr{box-sizing:content-box;height:0;overflow:visible}h1,h2,h3,h4,h6{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}a{color:#007bff;text-decoration:none;background-color:transparent}a:hover{color:#0056b3;text-decoration:underline}img{vertical-align:middle;border-style:none}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button{text-transform:none}[role=button]{cursor:pointer}[type=button],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}[type=button]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox]{box-sizing:border-box;padding:0}textarea{overflow:auto;resize:vertical}legend{display:block;width:100%;max-width:100%;padding:0;margin-bottom:.5rem;font-size:1.5rem;line-height:inherit;color:inherit;white-space:normal}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h1,h2,h3,h4,h6{margin-bottom:.5rem;font-weight:500;line-height:1.2}h1{font-size:2.5rem}h2{font-size:2rem}h3{font-size:1.75rem}h4{font-size:1.5rem}h6{font-size:1rem}hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col,.col-12,.col-6,.col-lg-2,.col-lg-4,.col-lg-6,.col-lg-9,.col-md-3,.col-md-6,.col-sm-12,.col-xl-8{position:relative;width:100%;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}@media (min-width:576px){.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:768px){.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}}@media (min-width:992px){.col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}}@media (min-width:1200px){.col-xl-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}}.form-control{display:block;width:100%;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control{transition:none}}.form-control::-ms-expand{background-color:transparent;border:0}.form-control:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057}.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control:-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::-ms-input-placeholder{color:#6c757d;opacity:1}.form-control:disabled{background-color:#e9ecef;opacity:1}input[type=date].form-control,input[type=time].form-control{-webkit-appearance:none;-moz-appearance:none;appearance:none}textarea.form-control{height:auto}.form-group{margin-bottom:1rem}.form-row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-row>.col,.form-row>[class*=col-]{padding-right:5px;padding-left:5px}.form-check{position:relative;display:block;padding-left:1.25rem}.form-check-input{position:absolute;margin-top:.3rem;margin-left:-1.25rem}.form-check-input:disabled~.form-check-label{color:#6c757d}.form-check-label{margin-bottom:0}.form-check-inline{display:-ms-inline-flexbox;display:inline-flex;-ms-flex-align:center;align-items:center;padding-left:0;margin-right:.75rem}.form-check-inline .form-check-input{position:static;margin-top:0;margin-right:.3125rem;margin-left:0}.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before{border-color:#28a745}.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before{border-color:#dc3545}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#212529;text-decoration:none}.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.btn:disabled{opacity:.65}.btn:not(:disabled):not(.disabled){cursor:pointer}.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc}.btn-primary:focus{color:#fff;background-color:#0069d9;border-color:#0062cc;box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active{color:#fff;background-color:#0062cc;border-color:#005cbf}.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active{color:#fff;background-color:#545b62;border-color:#4e555b}.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active{color:#fff;background-color:#1e7e34;border-color:#1c7430}.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-info:not(:disabled):not(.disabled).active,.btn-info:not(:disabled):not(.disabled):active{color:#fff;background-color:#117a8b;border-color:#10707f}.btn-info:not(:disabled):not(.disabled).active:focus,.btn-info:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(58,176,195,.5)}.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active{color:#212529;background-color:#d39e00;border-color:#c69500}.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(222,170,12,.5)}.btn-danger:not(:disabled):not(.disabled).active,.btn-danger:not(:disabled):not(.disabled):active{color:#fff;background-color:#bd2130;border-color:#b21f2d}.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(225,83,97,.5)}.btn-light:not(:disabled):not(.disabled).active,.btn-light:not(:disabled):not(.disabled):active{color:#212529;background-color:#dae0e5;border-color:#d3d9df}.btn-light:not(:disabled):not(.disabled).active:focus,.btn-light:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-dark:not(:disabled):not(.disabled).active,.btn-dark:not(:disabled):not(.disabled):active{color:#fff;background-color:#1d2124;border-color:#171a1d}.btn-dark:not(:disabled):not(.disabled).active:focus,.btn-dark:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-outline-primary{color:#007bff;border-color:#007bff}.btn-outline-primary:hover{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-primary:disabled{color:#007bff;background-color:transparent}.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-info:not(:disabled):not(.disabled).active,.btn-outline-info:not(:disabled):not(.disabled):active{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-outline-info:not(:disabled):not(.disabled).active:focus,.btn-outline-info:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-outline-warning:not(:disabled):not(.disabled).active,.btn-outline-warning:not(:disabled):not(.disabled):active{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-outline-warning:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-outline-light:not(:disabled):not(.disabled).active,.btn-outline-light:not(:disabled):not(.disabled):active{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:not(:disabled):not(.disabled).active:focus,.btn-outline-light:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-dark:not(:disabled):not(.disabled).active,.btn-outline-dark:not(:disabled):not(.disabled):active{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-outline-dark:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.collapse:not(.show){display:none}.dropdown{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#e9ecef}.dropdown-item:active{color:#fff;text-decoration:none;background-color:#007bff}.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent}.custom-control-input:focus:not(:checked)~.custom-control-label::before{border-color:#80bdff}.custom-control-input:not(:disabled):active~.custom-control-label::before{color:#fff;background-color:#b3d7ff;border-color:#b3d7ff}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.navbar{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem 1rem}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;flex-grow:1;-ms-flex-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem}.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:50%/100% 100% no-repeat}.navbar-light .navbar-brand{color:rgba(0,0,0,.9)}.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.5);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{opacity:.75}.justify-content-center{-ms-flex-pack:center;justify-content:center}@media print{*,::after,::before{text-shadow:none;box-shadow:none}a:not(.btn){text-decoration:underline}img{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px}.container{min-width:992px}.navbar{display:none}}
        html{-webkit-tap-highlight-color:transparent}body::-webkit-scrollbar{width:5px}body::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 5px rgba(0,0,0,.3);background-color:#fff}body::-webkit-scrollbar-thumb{background-color:#0f123f}body{font-family:"Proxima Nova";font-size:1rem;font-weight:400;color:#747d8d}p{line-height:1.5}.btn{box-shadow:none}.title{color:#2b317e;font-size:2.25rem;font-weight:700;max-width:800px;margin:0 auto}.nav-toogle{font-size:25px}amp-sidebar{padding:20px;width:20%;background-color:#fff;color:#2b317e}@media (max-width:767px){amp-sidebar{width:100%}}.acc-header{font-size:1rem;font-weight:600;background-color:#fff;padding:15px;border:none}.acc-content{padding:15px;font-weight:600}amp-accordion a{color:#2b317e;text-decoration:none}.navbar-block{display:flex;align-items:center}@font-face{font-family:"Proxima Nova";src:url(/assets/fonts/ProximaNova-Light.woff) format("woff");font-weight:300;font-style:normal;font-display:swap}@font-face{font-family:"Proxima Nova";src:url(/assets/fonts/ProximaNova-LightIt.woff) format("woff");font-weight:300;font-style:italic;font-display:swap}@font-face{font-family:"Proxima Nova";src:url(/assets/fonts/ProximaNova-Regular.woff) format("woff");font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:"Proxima Nova";src:url(/assets/fonts/ProximaNova-RegularIt.woff) format("woff");font-weight:400;font-style:italic;font-display:swap}@font-face{font-family:"Proxima Nova";src:url(/assets/fonts/ProximaNova-Semibold.woff) format("woff");font-weight:600;font-style:normal;font-display:swap}@font-face{font-family:"Proxima Nova";src:url(/assets/fonts/ProximaNova-SemiboldIt.woff) format("woff");font-weight:600;font-style:italic;font-display:swap}@font-face{font-family:"Proxima Nova";src:url(/assets/fonts/ProximaNova-Bold.woff) format("woff");font-weight:700;font-style:normal;font-display:swap}@font-face{font-family:"Proxima Nova";src:url(/assets/fonts/ProximaNova-BoldIt.woff) format("woff");font-weight:700;font-style:italic;font-display:swap}header{position:fixed;z-index:1;width:100%;background-color:#fff;box-shadow:0 0 4px 0 rgba(46,62,72,.12),0 0 2px 0 rgba(46,62,72,.12)}header .navbar-brand{margin:0;padding:0}header .navbar-brand img{height:65px}header .navbar-phone{font-weight:700;color:#2b317e;text-decoration:none;transition:all .1s linear}header .navbar-phone:hover{color:#007bff}header .navbar-book{margin:0 24px;padding:12px 24px}header .navbar-collapse{position:absolute;top:80px;right:0;width:100%;text-align:center;background-color:#fff;box-shadow:0 2px 4px 0 rgba(46,62,72,.12)}header .navbar-nav{padding:20px 20px 30px}header .navbar-nav .nav-item .nav-link{padding:20px;font-weight:600;color:#2b317e;transition:all .1s linear}header .navbar-nav .nav-item .nav-link:hover{color:#007bff}header .navbar-nav .nav-item .dropdown-menu{border:0;text-align:center}header .navbar-nav .nav-item .dropdown-menu .dropdown-item{color:#2b317e;font-weight:600}header .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover{color:#007bff;background-color:#fff}@media (min-width:768px){header .navbar-collapse{width:24%}}@media (max-width:767px){header .navbar-brand img{height:60px}header .navbar-phone{margin-right:8px}header .navbar-book{display:none}header .navbar-book-inline{display:block;padding:20px;margin:20px 0 0}header .navbar-collapse{top:74px}header .dropdown-item,header .nav-link{font-size:1.25rem}}@media (max-width:320px){header .navbar-brand img{height:40px}header .navbar-collapse{top:56px}}.main-hero{display:flex;padding:180px 0 100px;align-items:center;background:rgba(54,54,54,.5) url(/assets/front/images/hero-image.webp) bottom center no-repeat;background-size:cover;background-blend-mode:multiply}.main-hero h1{color:#fff;font-size:3rem;font-weight:700;margin-bottom:24px}.main-hero p{color:#fff;font-size:1.25rem}.main-hero .hero-list{margin:0;padding:0 0 20px 20px;color:#fff;font-size:1.25rem;line-height:1.7}@media (min-width:1600px){.main-hero{padding:280px 0 200px}.main-hero h1{font-size:3.5rem}}.offers{color:#fff;padding:80px 0;background-color:#141957}.offers-item{text-align:center;padding:56px 0 40px;border-radius:4px;border:1px solid rgba(255,255,255,.3);background-color:rgba(255,255,255,.08)}.offers-item h6{margin:12px 0}.offers-item h2,.offers-item h3{font-weight:600}@media (max-width:767px){.offers-item{margin:16px}}.services{padding:100px 0 70px;background-color:#fff}.services-info{display:flex;flex-direction:column;align-items:center;text-align:center}.services-info p{line-height:1.6}.services-item{margin:8px 0;padding:48px 24px 32px;text-align:center;border-radius:5px;transition:all linear .2s}.services-item:hover{box-shadow:0 0 13px 2px rgba(0,0,0,.13)}.services-item img{height:55px;width:55px}.services-item p{color:#2b317e;font-size:1.125rem;line-height:1.4;font-weight:600;margin-top:8px}.services hr{margin:8px 0 22px;width:100%;border:1px solid #dee2e6}.services h4{color:#2b317e;font-weight:700;line-height:1.4;max-width:550px;margin:24px 0 32px}.services .title{margin-bottom:16px}.brand-services{padding:70px 0 0;background-color:#fff}.brand-services-item{margin:8px 0;padding:48px 24px 32px;display:flex;flex-direction:column;text-align:center;align-items:center;border-radius:5px;transition:all linear .2s}.brand-services-item:hover{box-shadow:0 0 13px 2px rgba(0,0,0,.13)}.brand-services-item img{height:55px;width:55px}.brand-services-item a{display:flex;color:#2b317e;font-size:1.125rem;line-height:1.4;font-weight:600;margin-top:8px;text-decoration:none;transition:all linear .2s}.brand-services-item a:hover{color:#007bff}.about{display:flex;padding:10px 0 80px;background-color:#fff;text-align:center;align-items:center}.about-item{text-align:start;align-items:center;margin:40px 0}.about img{width:100%}.about h2{padding-bottom:24px}.about h4{color:#2b317e;font-weight:700}@media (max-width:768px){.about .row:nth-child(2n){flex-direction:column-reverse}.about img{margin-bottom:16px}}.locations{padding:80px 0 100px;background-color:#f8f8f8;text-align:center}.locations h3,.locations h4{color:#2b317e;font-weight:700;margin:40px 0 16px}.appointment{padding:120px 0;text-align:center;background:rgba(54,54,54,.7) url(/assets/front/images/booking-image.jpeg) no-repeat;background-size:cover;background-blend-mode:multiply}.appointment h2{color:#fff;margin-bottom:80px}.appointment h4{color:#fff;margin:24px 0;font-weight:600}.appointment img{width:100%}.appointment .order-form{border-radius:5px;padding:32px 20px;background-color:#fff}.appointment .order-form legend{color:#2b317e;font-weight:700;margin-bottom:16px}.appointment .order-form p{color:#2b317e;text-align:start;font-weight:600;font-size:1rem;margin:10px 0 8px 1px}.appointment .order-form i{color:red}.appointment .order-form .form-check{margin:0 8px 5px 5px}.appointment .order-form .agreement{text-align:left;font-size:.875rem;align-items:flex-start}.appointment .order-form .agreement input{margin-top:5px;margin-right:8px}.appointment .order-form-btn{padding:16px 40px;margin-top:16px}@media (max-width:768px){.order-form{margin-bottom:40px}}.advantages{padding:100px 0;text-align:center;background-color:#fff}.advantages-item img{width:70px;height:70px}.advantages-item p{margin-top:32px}.advantages .subtitle{font-size:.875rem;max-width:400px;margin:8px auto 64px}@media (max-width:768px){.advantages{padding:100px 0 60px}.advantages-item{margin-bottom:24px}}.testimonials{padding:100px 0;background-color:#f8f8f8}.testimonials .title{text-align:center;margin-bottom:54px}.testimonials-item{padding:20px 20px 5px;border-radius:4px;border:1px solid #ccc;background-color:#fff}.testimonials-item .headline{display:flex;flex-direction:row;justify-content:space-between;align-items:center}.testimonials-item .headline h6{color:#2b317e;font-weight:700;margin:0}.testimonials-item .headline img{width:40px;height:40px}.testimonials-item p{margin-top:16px}@media (max-width:768px){.testimonials{padding:100px 0 60px}.testimonials-item{margin-bottom:24px}}footer{padding:80px 0 50px;font-size:.875rem;color:rgba(255,255,255,.7);background-color:#0f123f}footer .copyright{display:flex;justify-content:space-between;color:#5d628d;font-size:.75rem}footer .copyright a{color:#5d628d;margin-left:16px;text-decoration:none;transition:all .1s linear}footer .copyright a:hover{color:#007bff}@media (max-width:767px){footer{text-align:center}footer .copyright{flex-direction:column}}-->
    </style>
</head>
<body>

<!-- HEADER -->


<amp-sidebar id='header-sidebar' side='left' layout='nodisplay'>
  <nav>
    <div class="main-menu items" role="menu" aria-label="Menu links" [class]="hidePrimary ? 'main-menu items hide-parent' : 'main-menu items'">
      <a class="link-container" role="menuitem" tabindex="0" aria-label="Home" href="{{ route('homepage-amp') }}">
        Home
      </a>
      <a class="link-container submenu-icon truncate" role="menuitem" tabindex="0" aria-label="Locations" aria-haspopup="true" on="tap:AMP.setState({level_1_1: !level_1_1, hidePrimary: !hidePrimary})">
        Locations
      </a>
      <div class="submenu hide-submenu" [class]="(level_1_1 ? 'submenu show-submenu' : 'submenu hide-submenu') + ' ' + (hideSecondary ? 'hide-parent' : '')" role="menu" aria-label="Locations">
        <div class="controls" [class]="hideSecondary ? 'controls hide-parent' : 'controls'" aria-label="Locations controls">
          <a tabindex="0" role="button" on="tap:AMP.setState({level_1_1: !level_1_1, hidePrimary: !hidePrimary})" aria-label="Return to Menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" />
            </svg>
          </a>
        </div>
        @foreach($locations as $location)
          <a class="link-container truncate" tabindex="0" href="{{ route('location', ['slug' => $location->slug]) }}">{{ $location->title }} Appliance Repair</a>
        @endforeach
      </div>
      <a class="link-container submenu-icon truncate" role="menuitem" tabindex="0" aria-label="Services" aria-haspopup="true" on="tap:AMP.setState({level_1_2: !level_1_2, hidePrimary: !hidePrimary})">
        Services
      </a>
      <div class="submenu hide-submenu" [class]="(level_1_2 ? 'submenu show-submenu' : 'submenu hide-submenu') + ' ' + (hideSecondary ? 'hide-parent' : '')" role="menu" aria-label="Services">
        <div class="controls" [class]="hideSecondary ? 'controls hide-parent' : 'controls'" aria-label="Kids controls">
          <a tabindex="0" role="button" on="tap:AMP.setState({level_1_2: !level_1_2, hidePrimary: !hidePrimary})" aria-label="Return to Menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" />
            </svg>
          </a>
        </div>
        @foreach($services as $service)
          <a class="link-container truncate" tabindex="0" href="{{ route('service', ['slug' => $service->slug]) }}">{{ $service->title }} Appliance Repair</a>
        @endforeach
      </div>
      <a class="link-container submenu-icon truncate" role="menuitem" tabindex="0" aria-label="Brands" aria-haspopup="true" on="tap:AMP.setState({level_1_3: !level_1_3, hidePrimary: !hidePrimary})" title="Brands">
        Brands                        
      </a>
      <div class="submenu hide-submenu" [class]="(level_1_3 ? 'submenu show-submenu' : 'submenu hide-submenu') + ' ' + (hideSecondary ? 'hide-parent' : '')" role="menu" aria-label="Brands">
        <div class="controls" [class]="hideSecondary ? 'controls hide-parent' : 'controls'" aria-label="Brands controls">
          <a tabindex="0" role="button" on="tap:AMP.setState({level_1_3: !level_1_3, hidePrimary: !hidePrimary})" aria-label="Return to Menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" />
            </svg>
          </a>
        </div>
        <a class="link-container submenu-icon truncate" role="menuitem" tabindex="0" aria-haspopup="true" on="tap:AMP.setState({level_2_0: !level_2_0, hideSecondary: !hideSecondary})">
          Amana Appliance Repair Service
        </a>
        <div class="submenu hide-submenu" [class]="(level_2_0 ? 'submenu show-submenu' : 'submenu hide-submenu') + ' ' + (hideTertiary ? 'hide-parent' : '')" role="menu">
          <div class="controls" [class]="hideTertiary ? 'controls hide-parent' : 'controls'" >
            <a tabindex="0" role="button" on="tap:AMP.setState({level_2_0: !level_2_0, hideSecondary: !hideSecondary})" aria-label="Return to Brands">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" />
              </svg>
            </a>
          </div>
          <a class="link-container truncate" tabindex="0" href="/link">
            Amana Dishwasher Repair Los Angeles                                                
          </a>
        </div>
      </div>
    </div>
  </nav>
</amp-sidebar>

<header>
  <nav class="navbar navbar-light">
    <a class="navbar-brand" href="{{ route('homepage-amp') }}">
      <amp-img layout="fixed" width="153" height="65px" src="{{ asset('/assets/front/images/logo.svg') }}" alt="appliance repaimen logo"></amp-img>
    </a>
    <a class="footer-brand" href="{{ route('homepage-amp') }}"></a>
    <div class="navbar-block">
      <a class="navbar-phone" href="tel:(855) 399-9888">(855) 399-9888</a>
      <a href="#book" class="btn btn-outline-primary navbar-book">Book a Service</a>
      <div class="hamburger" role="button" aria-label="mobile menu" on="tap:header-sidebar.toggle" tabindex="0">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z" />
        </svg>
      </div>
    </div>
  </nav>
</header>
<main>
    