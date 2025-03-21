<style>
        #questionTab:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: url("{{ $website->getMedia('settings')[0]->getUrl('header') }}");
            background-position: center;
            background-repeat: no-repeat;

            background-attachment: fixed;
            /* z-index: 1; */
            opacity: 0.1;
        }

        .collapsebtn {
            position: relative;
            z-index: 9999 !important;
        }

        .comment {
            overflow: hidden;
            padding: 0 0 1em;
            border-bottom: 1px solid #ddd;
            margin: 0 0 1em;
            *zoom: 1;
        }

        .comment-img {
            float: left;
            margin-right: 33px;
            border-radius: 5px;
            overflow: hidden;
        }

        .comment-img img {
            display: block;
        }

        .comment-body {
            overflow: hidden;
        }

        .comment .text {
            padding: 10px;
            border: 1px solid #e5e5e5;
            border-radius: 5px;
            background: #fff;
        }

        .comment .text p:last-child {
            margin: 0;
        }

        .comment .attribution {
            margin: 0.5em 0 0;
            font-size: 14px;
            color: #666;
        }

        /* Decoration */

        .comments,
        .comment {
            position: relative;
        }

        .comments:before,
        .comment:before,
        .comment .text:before {
            content: "";
            position: absolute;
            top: 0;
            left: 65px;
        }

        .comments:before {
            width: 3px;
            top: -20px;
            bottom: -20px;
            background: rgba(0, 0, 0, 0.1);
        }

        .comment:before {
            width: 9px;
            height: 9px;
            border: 3px solid #fff;
            border-radius: 100px;
            margin: 16px 0 0 -6px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2), inset 0 1px 1px rgba(0, 0, 0, 0.1);
            background: #ccc;
        }

        .comment:hover:before {
            background: orange;
        }

        .comment .text:before {
            top: 18px;
            left: 78px;
            width: 9px;
            height: 9px;
            border-width: 0 0 1px 1px;
            border-style: solid;
            border-color: #e5e5e5;
            background: #fff;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
        }

        .flex-container {
            display: flex;
            flex-wrap: wrap;
            /* background-color: DodgerBlue; */
            justify-content: center;
        }

        .flex-container>div {
            background-color: #f1f1f1;
            width: 30px;
            height: 30px;
            margin: 5px;
            text-align: center;
            line-height: 28px;
            font-size: 15px;
            border-radius: 50%;
            cursor: pointer;
            padding: 2px;
        }

        .attempted {
            background-color: #FF69B4 !important;
        }

        .switcher-active {
            background-color: green !important;
            color: white;
        }
    </style>