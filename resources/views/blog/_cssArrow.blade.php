<style>
        body .arrows {
            position: relative;
            /**/
            position: absolute;
            top: 1%;
            left: 50%;
            /**/
            width: 80px;
            height: 80px;
            transform: translate(-50%, -50%);
        }
        body .arrows:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-left: 26.66667px solid rgba(0,49,83,0.7);
            border-bottom: 26.66667px solid rgba(0,49,83,0.7);
            transform: translate(26.66667px, 106.66667px) rotate(-45deg);
            animation: arrows 2.5s linear infinite;
        }
        body .arrows:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-left: 26.66667px solid rgba(0,49,83,0.9);
            border-bottom: 26.66667px solid rgba(0,49,83,0.9);
            transform: translate(53.33333px, 0px) rotate(-45deg);
            animation: arrows 2.5s linear infinite -1.5s;
        }

        @keyframes arrows {
            0% {
                border-left: 26.66667px solid transparent;
                border-bottom: 26.66667px solid transparent;
                transform: translate(-13.33333px, -53.33333px) rotate(-45deg);
            }
            10%, 90% {
                border-left: 26.66667px solid transparent;
                border-bottom: 26.66667px solid transparent;
            }
            60% {
                border-left: 26.66667px solid rgba(0,49,83,0.7);
                border-bottom: 26.66667px solid rgba(0,49,83,0.7);
                transform: translate(-13.33333px, 0px) rotate(-45deg);
            }
            100% {
                border-left: 26.66667px solid transparent;
                border-bottom: 26.66667px solid transparent;
                transform: translate(-13.33333px, 53.33333px) rotate(-90deg);
            }
        }

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>




<div class="arrows"></div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://dev.finnthewebdesigner.com/pentitle.js'></script>



