{{-- resources/views/animation.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSAP Animation</title>
    <style>
        * { box-sizing: border-box; }
        body { background: #000; color: #fff; }
        main { position: relative; display: flex; flex-direction: column; width: 100vw; height: 100vh; }
        .controls { padding: 15px; }
        .content { display: flex; flex: 1; position: relative; }
        .text-container { display: flex; align-items: center; justify-content: center; }
        .text-block { width: 50%; font-size: 1.2em; line-height: 1.5; font-weight: 700; }
        .text-value { padding: 2px 0; }
        .buttons { padding-bottom: 10px; }
        #svg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: visible; pointer-events: none; }
        .arrow-path, .circle-path { fill: none; stroke-miterlimit: 10; stroke-width: 4; stroke-linecap: round; stroke-linejoin: round; visibility: hidden; stroke: #00ffe0; }
    </style>
</head>
<body>

<main>
    <div class="controls">
        <div class="buttons">
            <button id="random-btn">Random</button>
            <button id="replay-btn">Replay</button>
        </div>
        <div class="src-text text-value">Source Word</div>
        <div class="tgt-text text-value">Target Word</div>
    </div>

    <div class="content">
        <div class="text-container">
            <div class="text-block" id="text-block">
                Topping sweet roll liquorice soufflé cake. Caramels ice cream muffin. Brownie sweet biscuit gummies candy chocolate cake tootsie roll jelly-o jelly-o. Sweet gummi bears carrot cake oat cake. Tart chocolate caramels caramels cake jelly beans chocolate cake. Jelly-o lemon drops gingerbread halvah liquorice jelly-o fruitcake. Toffee cupcake chocolate bar. Wafer cake sweet roll chocolate bar fruitcake danish marshmallow. Candy jelly-o topping pastry. Sweet roll croissant gummi bears muffin ice cream. Chocolate cake candy canes biscuit pudding. Candy canes muffin icing. Chupa chups donut macaroon caramels.
            </div>
        </div>

        <svg id="svg">
            <path class="circle-path" d="M38.47.5S.5 2.67.5 19.76s30.87 21.7 47.3 21.7 44.64-6 44.64-20.48S55.32 3.84 42 3.75c-7.4 0-20.07.81-28.21 9" />
            <path class="arrow-path" />
        </svg>
    </div>
</main>

{{-- Importar GSAP y plugins necesarios --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/DrawSVGPlugin.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const paddingX = 8, paddingY = 4;
        const svg = document.querySelector("#svg");
        const srcText = document.querySelector(".src-text");
        const tgtText = document.querySelector(".tgt-text");
        const randomBtn = document.querySelector("#random-btn");
        const replayBtn = document.querySelector("#replay-btn");
        const arrowPath = document.querySelector(".arrow-path");
        const circlePath = document.querySelector(".circle-path");

        // Dividir palabras manualmente
        const textBlock = document.querySelector("#text-block");
        const words = textBlock.textContent.split(" ");
        textBlock.innerHTML = words.map(word => `<span class="word">${word}</span>`).join(" ");

        const allWords = Array.from(document.querySelectorAll(".word"));
        const numWords = allWords.length;
        const circleBox = circlePath.getBBox();

        let animation = gsap.timeline({ paused: true });
        let srcWord = null, tgtWord = null;

        window.addEventListener("resize", resize);
        replayBtn.addEventListener("click", replay);
        randomBtn.addEventListener("click", randomize);

        gsap.set([arrowPath, circlePath], { autoAlpha: 1, drawSVG: 0 });
        selectWords();

        function selectWords() {
            let index1 = Math.floor(Math.random() * numWords);
            let index2 = Math.floor(Math.random() * numWords);
            if (index1 === index2) return selectWords();

            srcWord = allWords[index1];
            tgtWord = allWords[index2];
            srcText.innerHTML = "Source Word = " + srcWord.textContent;
            tgtText.innerHTML = "Target Word = " + tgtWord.textContent;

            animation.seek(0);
            updateAnimation();
        }

        function updateAnimation() {
            const progress = animation.progress();
            animation.seek(0).clear();

            const svgBounds = getBounds(svg, 0, 0);
            const srcBounds = getBounds(srcWord, paddingX, paddingY);
            const tgtBounds = getBounds(tgtWord, 0, 0);

            const x1 = (srcBounds.left - svgBounds.left) + srcBounds.width / 2;
            const y1 = (srcBounds.top - svgBounds.top) + paddingY;
            const x2 = (tgtBounds.left - svgBounds.left) + tgtBounds.width / 2;
            const y2 = (tgtBounds.top - svgBounds.top) + paddingY;
            const dx = x1 - x2;
            const dy = y1 - y2;

            const rx = Math.abs(dx * 0.6);
            const ry = Math.max(Math.abs(dy * 1.35), 100);
            const sweepFlag = dx < 0 ? 1 : 0;
            const data = `M${x1} ${y1} A ${rx} ${ry} 0 0 ${sweepFlag} ${x2} ${y2}`;
            arrowPath.setAttribute("d", data);

            gsap.set(circlePath, {
                scaleX: srcBounds.width / circleBox.width,
                scaleY: srcBounds.height / circleBox.height,
                x: srcBounds.left - svgBounds.left,
                y: srcBounds.top - svgBounds.top
            });

            animation.to(circlePath, { duration: 1, drawSVG: true })
                .to(arrowPath, { duration: 0.5, drawSVG: true })
                .to(tgtWord, { duration: 0.2, color: "red" })
                .progress(progress || 0);
        }

        function getBounds(element, paddingX, paddingY) {
            const rect = element.getBoundingClientRect();
            return {
                left: rect.left - paddingX,
                top: rect.top - paddingY,
                width: rect.width + paddingX * 2,
                height: rect.height + paddingY * 2,
            };
        }

        function resize() {
            updateAnimation();
        }

        function replay() {
            animation.play(0);
        }

        function randomize() {
            selectWords();
        }
    });
</script>
</body>
</html>
