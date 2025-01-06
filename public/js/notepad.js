// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)
// this is version v4 made in 2023 (v1 2020, v2/v3 2021-2022)

// sites to take design/idea from:
// https://www.scrapingbee.com/blog/csharp-html-parser/
// https://80.lv/articles/a-stunning-elden-ring-inspired-environment-made-in-unreal-engine/
// https://help.tilda.cc/fontsgoogle
// "ample whitespace"

const log = console.log;

;(function(){ //initializer function. not a library func or anything. just inits things


if (typeof window !== 'undefined') 
{
	initBrowser();
}
else
{
	initNodeJS()
}

const style = 
`
body
{
    margin: 0px;
    overflow-x:hidden;
}
::-webkit-scrollbar {
    background-color: #202324;
}
::-webkit-scrollbar-thumb {
  background: #3a3a3a;
}

::selection {
  background: orange;
  color: black;
}

hr
{
	margin-top:100px;
}

.tableOfContents
{
	position: fixed;
	width: inherit;
	height: auto;
    color: __FONTCOLOR__;
    display: flex;
    flex-direction: column;
}
.tableOfContentsTitle
{
	margin:30px;
}
.tableOfContentsEntry
{
	margin-left: 30px;
	margin-bottom: 10px;
	text-decoration: none;
}
.tableOfContentsEntry:hover
{
	text-decoration: underline;
}
.tableOfContentsEntry_highlight
{
	color: white;
}
.tableOfContentsChart
{
}

.duck
{
	position:absolute;
    display: flex;
    
    width: 100vw;
    height: fit-content;
    min-height: 100%;

    tab-size: 4; /*change this to match ur text editor*/
    background-color: __BKCOLOR__;
}
.duck_left
{
	width: 20%;
    min-width: 20%;
}
.duck_right
{
	width: 15%;
    min-width: 15%; /* this is like wikipedia, the space on right is smaller than that on left. */
}
.duck_mid
{
    min-width: 60%;
    background-color: __FTCOLOR__;
    color: __FONTCOLOR__;
    box-shadow: 0px 0px 66px 20px rgba(0,0,0,0.05);

    /*
    	font following https://dev.to/azure/exploring-net-webassembly-with-wasi-and-wasmtime-41l5
    	just a smaller font
    */
    font: 16px / 27px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
	line-height: 1.3;
}
a{
    color: #3391ff;
}
.duck_mid *:not(img, video)
{
}
.duck_mid h1, h2, h3, h4, h5, pre, a
{
	white-space: pre-wrap; /*break the line when overflowing*/
	margin: 10px;
}
.duck_mid > *:is(h1, h2, h3, h4, h5, pre, a)
{
	margin-left: 80px;
	margin-right: 80px;
}

.duck_mid pre, a  /* margins top/bot are 0 to make it act like real raw file tbh. */
{
	margin-top: 0px;
	margin-bottom: 0px;
}
.duck_mid pre
{
	font: inherit;
}
.duck_mid a
{
	font-size:.7em; /* CRUCIAL, AS LINKS ARE TERRIBLE FOR READABILITY */
	margin: 0px;
}
.duck_mid img, video
{
    display: block;
    /*aspect-ratio: 16/9;*/
    height: 350px;
    object-fit: cover;
    object-position: 50% 35%;
    background-color: black;
    margin-top: 10px;
    margin-bottom: 10px;

    width: 100%;
}

.gallery {
    display: flex;
    flex-wrap: wrap; justify-content: center;
    overflow: auto;
    background-color: rgba(0,0,0,.5);

    width: 100%;

    /*
	    comment/uncomment this next line if u wanna make it scale vertically rather
	    than add a scrollbar.
    */
    /*max-height:300px;*/
}
.gallery img,
.gallery video {
	position: unset;
	max-width: calc(100%/3 - 20px); /* -20px is for when scrollbar appears */
	height: auto; /* Force Maintain aspect ratio */
    margin:5px;
    border-radius: 15px;
    transition: all .3s ease; /* makes hover effects smooth */
}
.gallery img:hover {
	filter: brightness(130%);
}

.float-right /*for images to wrap around text*/
{
	margin: 0px;
	margin-right: 80px;
	float: right;
	width: auto !important;
	height: auto !important;
	max-width: 20em;
}
.float-left /*for images to wrap around text*/
{
	margin: 0px;
	margin-left: 80px;
	float: left;
	width: auto !important;
	height: auto !important;
	max-width: 20em;
}

.connectomesRulesViewer
{
	background-color:black;
	width: 100%;
	min-height: 20px;
}
.connectomesRulesViewerRuleHref{
	text-decoration: none;
}
.connectomesRulesViewerRuleHref:hover{
	text-decoration: underline;
}

`
// object-view-box explanation
// https://blog.logrocket.com/wp-content/uploads/2023/02/using-inset-function-control-four-edges-1.png


function initBrowser()
{
	var currentInstance = null;

	window.addEventListener('DOMContentLoaded', function()
	{
		currentInstance = new notepad(document.body, {style: style});
	});

	window.addEventListener('dragover', e => e.preventDefault())
	window.addEventListener('drop', e => 
	{
		e.preventDefault();
		const file = e.dataTransfer.files[0];
		if(!file)
			return
		reader = new FileReader();
		reader.onload = function(event)
		{
			const text = event.target.result;
			currentInstance.container.remove()
			currentInstance = new notepad(text, {style: style})
		};
		reader.readAsText(file);
	})
}

function initNodeJS()
{
	const fs = require('fs')
	const path = require('path')
	const os = require('os')

	const outputFileName = 'metadata.json'
	const outputFileDir = path.join(os.tmpdir(), 'notepadjs')
	const outputFilePath = path.join(outputFileDir, outputFileName)

	if(!fs.existsSync(outputFileDir))
	{
		fs.mkdirSync(outputFileDir, { recursive: true });
	}

	/*if(fs.existsSync(outputFilePath))
	{
		console.log('found metadata file. analyzing included files for modifications...');
		console.log('if you want to add more files. re-run with command -remake');
		// todo
	}
	else // hardcoded for now, IRL should be able to choose files from a dialog
	{*/
		var outputJSON = 
		{
			files : [],
			connectomes : [],
		}
		var filesToAnalyze = []
		filesToAnalyze = fs.readdirSync('./pp/2023').map(x => path.join('./pp/2023/', x)).filter(x => fs.statSync(x).isFile())

		// fill outputJSON
		filesToAnalyze.forEach(x => outputJSON.files.push( {name: x, content: fs.readFileSync(x, 'utf-8')} ))

		for(let i=0; i<outputJSON.files.length; i++)
		{
			let file = outputJSON.files[i]
			let fileConn = extractConnectomes(file.content); fileConn.forEach(x => x.file = file.name)
			outputJSON.connectomes.push(...fileConn)
		}

		//console.log("found connectomes:", outputJSON.connectomes)

		// writing the file
		fs.writeFileSync(outputFilePath, JSON.stringify(outputJSON), 'utf-8')
		console.log('metadata file(s) written to: ' + outputFilePath)
	//}
}

})();

function extractConnectomes(inputString) {
	const regex = /\[(.*?)\]/g;
	let connectomes = [];
	let match;
	while ((match = regex.exec(inputString)) !== null) {
		connectomes.push({
			connectome: match[1],
			startIndex: match.index,
			endIndex: match.index + match[0].length - 1
		});
	}
	return connectomes;
}


function discordLikeImageViewer(targets)
{
	const style = 
`
	.vw_blackscreen
	{
		background-color: rgba(0, 0, 0, .8);
		z-index: 10000;
		width: 100%;
		height: 100%;
		position: fixed; /*makes it consider the scrolling of the page*/
	}
	.vw_blackscreen_show
	{
		animation: fadeIn 0.1s ease-in-out forwards;
	}
	.vw_blackscreen_hide
	{
		animation: fadeOut 0.1s ease-in-out forwards;
	}
	.vw_img
	{
		position:absolute;
		top : 50%;
		left: 50%;
		max-width: 90%;
		max-height: 90%;
	}
	.vw_img_show
	{
		animation: fadeInPrev 0.2s ease-in-out forwards;
	}
	.vw_img_hide
	{
		animation: fadeOutPrev 0.2s ease-in-out forwards;
	}


	@keyframes fadeIn {
		0% { opacity: 0; }
		100% { opacity: 1; }
	}
	@keyframes fadeOut {
		0% { opacity: 1; }
		100% { opacity: 0; display: none; }
	}
	@keyframes fadeOutPrev
	{
		0%{transform:translate(-50%, -50%) scale(1)}100%{transform:translate(-50%, -50%) scale(.9)}
	}
	@keyframes fadeInPrev
	{
		0%{
		    transform:translate(-50%, -50%) scale(.9)
		}
		100%{
		    transform:translate(-50%, -50%) scale(1)
		}
	}
`
	const style_elem = document.createElement("style")
	style_elem.innerHTML = style;
	document.head.appendChild(style_elem);

	const blackscreen = document.createElement('div')
	blackscreen.className = "vw_blackscreen";
	document.body.appendChild(blackscreen);
	blackscreen.style.display = "none"

	const preview = document.createElement('img')
	preview.className = "vw_img";
	blackscreen.appendChild(preview);

	function show_preview(img)
	{
		preview.src = img.src
		blackscreen.style.display = "block"
		blackscreen.className = "vw_blackscreen vw_blackscreen_show";
		preview.className = "vw_img vw_img_show"

		document.body.style.overflow = "hidden" //make not able to scroll when img_previewer is on.
	}

	function hide_preview()
	{
		blackscreen.className = "vw_blackscreen vw_blackscreen_hide";
		preview.className = "vw_img vw_img_hide"
		function reee() {
			blackscreen.style.display = "none"
			blackscreen.removeEventListener('animationend', reee);
		}
		blackscreen.addEventListener('animationend', reee);

		document.body.style.overflow = "" //make not able to scroll when img_previewer is on.
	}

	blackscreen.addEventListener("click", hide_preview)
	window.addEventListener("keydown", function(e)
	{
		if(e.code == "Escape") hide_preview()
	})

	for(let i=0; i<targets.length; i++)
	{
		targets[i].style.cursor = "hand"
		targets[i].addEventListener("click", e => show_preview(targets[i]))
	}

}


class notepad
{
	#settings;
	#container;
	#element;
	#mid;
	#left;
	#right;
	#defaultFavicon = "data:image/png;base64,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"
	constructor(el, settings)
	{
		// TODO:
		// there is problem here of flash of the body loads with no style for like 200ms before
		// loading the content into duck panel and all

		if(!document.title)
		{
			var title = window.location.href.split('#')[0].split('?')[0].split('/').pop().split('.')[0]
			//title += " - notepad";
			document.title = title;
		}
		this.#AddOrChangeDocumentFavicon( this.#defaultFavicon );

		const container = document.createElement('div')
		const leftPanel = document.createElement('div')
		const midPanel = document.createElement('div')
		const rightPanel = document.createElement('div')

		container.className = "duck"
		midPanel.className = "duck_mid"
		leftPanel.className = "duck_left"
		rightPanel.className = "duck_right"

		container.appendChild(leftPanel)
		container.appendChild(midPanel)
		container.appendChild(rightPanel)

		if(el instanceof HTMLElement)
		{
			midPanel.innerHTML = el.innerHTML;
			el.innerHTML = ""
			el.appendChild(container)
		}
		else if(typeof(el) === 'string')
		{
			midPanel.innerHTML = el;
			document.body.appendChild(container)
		}
		else
		{
			throw "error. invalid element in constructor."
		}

		this.#settings = settings
		this.#container = container
		this.#mid = this.#element = midPanel
		this.#left = leftPanel
		this.#right = rightPanel
		this.#loadStyle();
		this.#zipHandler();
		this.#replaceRawTexts();
		this.#preProcessImages();
		this.#handleElemsTaggedWithSameLine();
		this.#handleConnectomes();
		this.#addTableOfContents();
		this.#addSpeechSynthesis();
		this.#addFooter();
		this.#watchResize();
		this.#toggleMobileViewOnKey();
		this.#toggleImagesOnKey();
		this.#scrollOnKey();
	}
	hideLeftPanel(hide=true)
	{
		this.#left.style.display = hide ? "none" : ""
	}
	hideRightPanel(hide=true)
	{
		this.#right.style.display = hide ? "none" : ""
	}

	get container()
	{
		return this.#container
	}

	#addScript(src, cb)
	{
		const script = document.createElement('script');
		script.src = src
		document.head.appendChild(script);
		if(cb) script.addEventListener('load', cb)
		return script
	}
	#addTableOfContents()
	{

		const elems = Array.from(this.#element.getElementsByTagName('*'));
		const headers = elems.filter(x => x.tagName == "H1").map(x => elems.indexOf(x))
		const totalSize = this.#element.innerText.length
		var sizes = []; 	// here i wanna get how much text is after each h1 header. and put it in an array
							// for example amount of text between first h1 and second h2 will be sizes[0] etc..
							// the last header will always have no header after it but we will put the size of text after.
		sizes = headers.reduce((acc, curr, index) => {
			const startIdx = curr;
			const endIdx = (index + 1 < headers.length) ? headers[index + 1] : elems.length;
			const size = elems.slice(startIdx + 1, endIdx).reduce((sum, elem) => sum + elem.innerText.length, 0);
			acc.push(size);
			return acc;
		}, []); //log(sizes.reduce((x,e)=>x+e), totalSize, sizes, headers.length)


		function gotoHash()
		{
			// using regex to remove non-alphanumeric chars
			// cuz escape/unescape fails for some chars
			const hash = unescape(window.location.hash.substring(1)).replace(/\W/g, '');
			for(let i=0; i<headers.length; i++)
			{
				let h = elems[headers[i]]
				let t = h.innerText.replace(/\W/g, '')
				if(t == hash)
				{
					h.scrollIntoView({ behavior: "smooth" });
					break
				}
			}
		}
		//gotoHash() //disabled because very annoying
		//window.addEventListener("hashchange", gotoHash); //problem with this only ran once.
		window.addEventListener("popstate", gotoHash);

		const container = document.createElement('div')
		this.#left.appendChild(container)
		container.className = "tableOfContents"

		const title = document.createElement('h1')
		container.appendChild(title)
		title.innerText = "Table of contents"
		title.className = "tableOfContentsTitle"

		const self = this;

		headers.forEach((x, i) => 
		{
			const header = elems[x] // h1, h2, .. elems
			const header_text = header.innerText;
			const entry = document.createElement('a')
			container.appendChild(entry)
			entry.className = "tableOfContentsEntry"
			entry.innerText = header_text //"[" + (sizes[i]*100/totalSize).toFixed(0) + "%] " + header_text
			entry.href = "#" + header_text

			highlightOnScroll() //call first time when page loaded.
			window.addEventListener('scroll', () => highlightOnScroll());
			function highlightOnScroll()
			{
				// check if 30% of the height of the client webpage is between this header and next header
				// and if so, then highlight the "entry"
				const scrollPosition = window.scrollY;
				const windowHeight = window.innerHeight;
				const headerHeight = header.offsetHeight;
				const nextHeader = i < headers.length - 1 ? elems[headers[i + 1]] : null;
				const nextHeaderTop = nextHeader ? nextHeader.offsetTop : Number.MAX_SAFE_INTEGER;

				if (scrollPosition >= header.offsetTop - 0.3 * windowHeight && scrollPosition < nextHeaderTop - 0.3 * windowHeight) {
					entry.classList.add('tableOfContentsEntry_highlight'); // Add a CSS class to highlight the entry
				} else {
					entry.classList.remove('tableOfContentsEntry_highlight'); // Remove the highlight if not in view
				}
			}
		})
	}
	#handleElemsTaggedWithSameLine() //makes elements marked with "sameline" appear in the last line not in new line
	{
		var elems = Array.from(this.#element.querySelectorAll('[sameline]'))
		while(elems.length)
		{
			let e = elems[0]
			elems = elems.filter(x => x !== e)

			let container = document.createElement('div')
			container.style.display = "flex"

			let elemsToJoin = []
			if(e.previousElementSibling) elemsToJoin.push(e.previousElementSibling)
			elemsToJoin.push(e)

			let next = e.nextElementSibling
			while(next && elems.indexOf(next) != -1)
			{
				elemsToJoin.push(next)
				elems = elems.filter(x => x !== next)
				next = next.nextElementSibling
			}

			e.parentNode.insertBefore(container, e)
			elemsToJoin.forEach(x => container.appendChild(x))
		}
	}
	#addSpeechSynthesis()
	{
		if (!('speechSynthesis' in window))
		{
			console.log('Text-to-speech is not supported in this browser.');
			return
		}
		const speech = new SpeechSynthesisUtterance();
		speech.text = this.#element.innerText;
		speech.voice = speechSynthesis.getVoices()[0];
		var playing = false;

		window.addEventListener("keydown", function(e)
		{
			if(e.key == "t")
			{
				if(speechSynthesis.speaking)
					speechSynthesis.cancel()
				else
					speechSynthesis.speak(speech);
			}
		})
		//speechSynthesis.speak(speech);
	}
	#preProcessImages()
	{
		const images = document.getElementsByTagName("IMG");
		discordLikeImageViewer(images)
		// might implement other things (eg. lazy load, or loading gif, ...)
	}
	#addFooter()
	{
		var footer = document.createElement('div')
		footer.style.height = "70vh"
		this.#element.appendChild(footer)
	}
	#zipHandler() //allows u to load files from zips. for eg img src from zip
	{
this.#addScript("https://cdnjs.cloudflare.com/ajax/libs/jszip/3.6.0/jszip.min.js", ()=>{
		function getValidSource(zipSource, callback)
		{
			const extensions = ["zip", "rar"];
			for(let i=0; i<extensions.length; i++)
			{
				let ext = extensions[i]
				let zipFileNameIdx = zipSource.lastIndexOf("." + ext)
				if(zipFileNameIdx != -1)
				{
					var zip = new JSZip()
					let zipFileName = zipSource.substring(0, zipFileNameIdx + ext.length + 1);
					let fileName = zipSource.substring(zipFileNameIdx + ext.length + 1 + 1)
					log("from src:", zipSource, "found zip:", zipFileName, "looking for file:", fileName)

					fetch(zipFileName)
						.then(res => res.arrayBuffer())
						.then(buffer =>
							{
								console.log("loading zip...")
								zip.loadAsync(buffer).then(zip => {
									var file = zip.file(fileName)
									file.async("blob").then(data => {
										console.log("loaded file:", data)
										callback(URL.createObjectURL(data))
									})
								})
							})
					return;
				}
			}
			// in case not zip/valid zip
			callback(zipSource)
		}

		var existingElems = Array.from(this.#element.getElementsByTagName("*"))
		existingElems.forEach(e => e.src ? getValidSource(e.src, newsrc => e.src != newsrc ? e.src = newsrc : undefined) : undefined)

		const observer = new MutationObserver(function(mutationsList) 
		{
			// Check each mutation that has occurred
			for (const mutation of mutationsList) {
				// Check if new nodes have been added
				if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
					// Handle the inserted element(s) here
					var e = mutation.addedNodes[0]
					e.src ? getValidSource(e.src, newsrc => e.src != newsrc ? e.src = newsrc : undefined) : undefined;
				}
			}
		});
		const observerOptions = {
			childList: true,
			subtree: true // Set to true if you want to observe the entire subtree of the target element
		};
		observer.observe(this.#element, observerOptions);
});
	}
	#AddOrChangeDocumentFavicon(newicon) {
		// Create a new <link> element for the favicon
		var linkElement = document.createElement('link');
		linkElement.rel = 'icon';
		linkElement.type = 'image/x-icon';
		linkElement.href = newicon;

		// Check if a favicon already exists
		var existingFavicon = document.querySelector('link[rel="icon"]');

		if (existingFavicon) {
			// If a favicon exists, replace it with the new one
			document.head.removeChild(existingFavicon);
		}

		// Append the new <link> element to the document's head
		document.head.appendChild(linkElement);
	}
	#replaceBy(elem, replacement, copyInner=true)
	{
		if(!(elem instanceof HTMLElement)) throw "trying to replace a non HTMLElement"
		elem.parentNode.replaceChild(replacement, elem);
		if(copyInner) replacement.innerHTML = elem.innerHTML;
	}
	#createHTMLFromString(htmlString)
	{
		const tempElement = document.createElement('div');
		tempElement.innerHTML = htmlString;
		return Array.from(tempElement.children);
	}
	  
	#loadStyle()
	{
		var mode = "light"
		var customColor = {r: 5, g: 60, b: 80}
		var final_style;

		// adding a "<meta name="theme-color" content="pink"/>" makes the page theme pink

		// there's a bug todo here is that this code could load before the body is loaded.
		// and thus will not read the "meta" tags...
		function fetchMetaAndGetColor()
		{
			const metaTag = document.querySelector('meta[name="theme-color"]');
			const colorValue = metaTag?.getAttribute('content') ?? null;
			return colorValue
		}
		function convertColorToRGBA(color, alpha = 1) {
			const div = document.createElement('div');
			div.style.color = color;
			document.body.appendChild(div);
			const computedColor = window.getComputedStyle(div).color;
			document.body.removeChild(div);
			const [r, g, b] = computedColor.match(/\d+/g).map(Number);
			return { r, g, b };
		}

		customColor = fetchMetaAndGetColor();
		if(customColor)
		{
			mode = "custom";
			customColor = convertColorToRGBA(customColor)
		}

		if(mode == "dark")
		{
			final_style = this.#settings.style
				.replaceAll("__FTCOLOR__", "rgb(30, 30, 30)")
				.replaceAll("__BKCOLOR__", "rgb(20, 20, 20)")
				.replaceAll("__FONTCOLOR__", "rgb(205, 215, 210)")
		}
		else if(mode == "light")
		{
			final_style = this.#settings.style
				.replaceAll("__BKCOLOR__", "rgb(230,230,230)")
				.replaceAll("__FTCOLOR__", "white")
				.replaceAll("__FONTCOLOR__", "rgb(60,60,60)")
		}
		else
		{
			const map = function (obj, fn, ctx) {
				return Object.keys(obj).reduce((a, b) => {
					a[b] = fn.call(ctx || null, b, obj[b]);
					return a;
				}, {});
			};

			function getGoodFontColor(backgroundColor) {
				// Extract RGB values from the backgroundColor object
				const { r, g, b } = backgroundColor;

				// Convert RGB values to relative luminance (as per WCAG specifications)
				const getRelativeLuminance = (value) => {
					const sRGBValue = value / 255;
					return sRGBValue <= 0.03928 ? sRGBValue / 12.92 : Math.pow((sRGBValue + 0.055) / 1.055, 2.4);
				};

				const luminance =
				0.2126 * getRelativeLuminance(r) +
				0.7152 * getRelativeLuminance(g) +
				0.0722 * getRelativeLuminance(b);

				// Decide on the font color based on the luminance value
				return luminance > 0.5 ? "black" : "white";
			}

			const customColor_bk = map(customColor, (k,v) => v*.7);
			const customColor_ft = customColor
			const customColor_font = getGoodFontColor(customColor_ft)

			final_style = this.#settings.style
				.replaceAll("__BKCOLOR__", `rgb(${customColor_bk.r}, ${customColor_bk.g}, ${customColor_bk.b})`)
				.replaceAll("__FTCOLOR__", `rgb(${customColor_ft.r}, ${customColor_ft.g}, ${customColor_ft.b})`)
				.replaceAll("__FONTCOLOR__", customColor_font)
		}

		const style_elem = document.createElement("style")
		style_elem.innerHTML = final_style;
		document.head.appendChild(style_elem);
	}

	#handleConnectomes()
	{

		const connectomesRulesViewer = document.createElement('div')
		connectomesRulesViewer.className = "connectomesRulesViewer"
		connectomesRulesViewer.style.display = "none"

		const fileText = this.#element.innerText
		const connectomesInEntireFile = extractConnectomes(fileText)

		var currConn = -1
		this.#element.childNodes.forEach(element => 
		{
			if(element.tagName === "PRE" && element.textContent.trim() !== "")
			{
				// innerHTML in everything to keep stuff like links-highlighting, return lines, etc..
				const connectomes = extractConnectomes(element.innerHTML)
				if(connectomes.length == 0)
					return

				const replacements = connectomes.map(x => { 
					return {
						// HREF IS CRUCIAL for ability to "go back" in history.
						replaceBy: `<a style='color:orange;' href='#connId=${++currConn}' connId='${currConn}'>${x.connectome}</a>`, 
						startIndex: x.startIndex+1, 
						endIndex: x.endIndex
					}
				})

				element.innerHTML = replaceTextBetweenIndices(element.innerHTML, replacements);

				const anchors = Array.from(element.getElementsByTagName('A')).filter(a => a.getAttribute('connId'));

				anchors.forEach(a => 
				{
					const connId = parseInt(a.getAttribute('connId'))

					a.addEventListener('click', _ =>
					{
						a.parentNode.insertBefore(connectomesRulesViewer, a.nextSibling);

						connectomesRulesViewer.style.display = ""

						var innerHTML = "<ul>"
						connectomesInEntireFile.forEach((c, i) =>
						{
							// making opacity low is much better than hiding it as it also
							// unconsiously gives apriori of location of the rule within the entire text
							var hiddenStyle = ""
							if(i === connId)
								hiddenStyle = "style='opacity:.3;'"

							if(c.connectome === a.innerHTML)
							{
								const lineContainingTheConnectome = getLineFromCharacterIndex(fileText, c.startIndex)
								innerHTML += `<li ${hiddenStyle}><a href="#connId=${i}" 
								class='connectomesRulesViewerRuleHref'>${lineContainingTheConnectome}</a></li>`
							}
						})
						innerHTML += "</ul>"
						connectomesRulesViewer.innerHTML = innerHTML
					})
				})

				function gotoHash()
				{
					const hash = unescape(window.location.hash.substring(1)).split('=').pop();
					anchors.forEach(a => 
					{
						const connId = a.getAttribute('connId')
						if(hash == connId)
						{
							if(!isElementInViewport(a))
							{
								// block top is so annoying: https://stackoverflow.com/a/58714347
								a.scrollIntoView({ /*behavior: "smooth",*/ block: 'center' });
							}
							
							// select regardless if its in view or not.
							var selection = window.getSelection();
							var range = document.createRange();
							range.selectNodeContents(a);
							selection.removeAllRanges();
							selection.addRange(range);

						}
					})
				}
				window.addEventListener("popstate", gotoHash);
				gotoHash(); //run on page refresh
			}
		});
		function isElementInViewport(element) {
			var rect = element.getBoundingClientRect();
			return (
				rect.top >= 0 &&
				rect.left >= 0 &&
				rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
				rect.right <= (window.innerWidth || document.documentElement.clientWidth)
			);
		}

		function getLineFromCharacterIndex(fullText, charIdx) {
			const lines = fullText.split('\n');
			let currentIndex = 0;

			for (let i = 0; i < lines.length; i++) {
				const line = lines[i];
				const lineLength = line.length + 1; // Add 1 to account for the newline character

				if (currentIndex + lineLength > charIdx) {
					return line.trim(); // Return the line content without leading/trailing spaces
				}

				currentIndex += lineLength;
			}
			// If the character index is out of range, return an empty string or handle it as appropriate
			return '';
		}
		// replacement = for eg. [{replaceBy:"hello", startIndex:123, endIndex:384}]
		function replaceTextBetweenIndices(fullText, replacements) {
			let offset = 0;
			for (const replacement of replacements) {
				const {
					replaceBy,
					startIndex,
					endIndex
				} = replacement;
				const actualStartIndex = startIndex + offset;
				const actualEndIndex = endIndex + offset;

				const beforeReplacement = fullText.substring(0, actualStartIndex);
				const afterReplacement = fullText.substring(actualEndIndex);

				fullText = beforeReplacement + replaceBy + afterReplacement;

				const replacementLengthDiff = replaceBy.length - (actualEndIndex - actualStartIndex);
				offset += replacementLengthDiff;
			}
			return fullText;
		}
	}

	#replaceRawTexts()
	{
		this.#element.childNodes.forEach(element => 
		{
			if(element.nodeType === Node.TEXT_NODE && element.textContent.trim() !== "")
			{
				const textEl = document.createElement('pre'); //originally its equivalent is 'span' but we want a pre
				const attributes = getLastWordsStartingWithAt(element.textContent) 	//these to allow using for eg "SameLine" without having 
																					// to encadre to text by "<pre SameLine></pre>" which is sooo annoying
				attributes.forEach(a => textEl.setAttribute(a, ""))


				const textWithoutAttribtues = removeLastWordsStartingWithAt(element.textContent)
				const textTrimmed = 
							textWithoutAttribtues.replace(/^(\n)+|(\n)+$/g, "\n")
							//element.textContent.replace(/^(\n)+|(\n)+$/g, "\n") // \n\n\nHello\n\n\nWorld\n\n\n ----> \nHello\n\nWorld\n
				const textWithDots = transformTextWithDashesToHTML(textTrimmed)
				const textWithLinks = addLinks(textWithDots)

				// here we change innerHTML not textContent or innerText
				textEl.innerHTML = textWithLinks
				element.parentNode.replaceChild(textEl, element);
			}
		});

		function transformTextWithDashesToHTML(text) {
			const lines = text.split('\n');
			let result = '<ul>';
			let currentIndentation = 0;
			let isOpen = false

			lines.forEach(line => 
			{
				const trimmedLine = line.trim();
				if (trimmedLine.startsWith('- ')) //careful: its dash+space not only dash. (why? just like figma. also so that things like ------- doesnt show with a bullet)
				{
					const indentationLevel = line.search(/\S/); // Calculate the indentation level
					const content = line.slice(indentationLevel + 1) //.trim();
					// Adjust the current indentation level based on tabs
					currentIndentation = Math.max(0, currentIndentation + (indentationLevel - currentIndentation));
					result += `<li style="margin-left: ${currentIndentation * 20}px;">${content}</li>`;
				}
				else
				{
					result += '<pre>' + line +'<br></pre>'
				}
			});

			result += '</ul>';
			return result;
		}
		// detects links within a text string, and every link found, makes it an ANCHOR tag.
		// returns the HTML string
		function addLinks(str)
		{
			const urlRegex = /(https?:\/\/[^\s]+)/g;
			const linkedText = str.replace(urlRegex, function(url) {
				return '<a href="' + url + '" target="_blank">' + url + '</a>';
			});
			return linkedText;
		}

		function removeLastWordsStartingWithAt(str) {
			const words = str.split(" ");
			let result = "";

			for (let i = 0; i < words.length; i++) {
				const word = words[i];

				if (word.startsWith("@")) {
					const cleanedWord = word.replace(/[^a-zA-Z0-9]/g, "");

					if (cleanedWord.length > 1) {
						continue;
					}
				}

				result += word + " ";
			}

			return result;
		}
		function getLastWordsStartingWithAt(str)
		{
			const words = str.split(" ");
			const result = [];

			for (let i = words.length - 1; i >= 0; i--) {
				const word = words[i];
		      
				if (word.startsWith("@")) {
					// Remove any non-alphanumeric characters from the word
					const cleanedWord = word.replace(/[^a-zA-Z0-9]/g, "");
		          
					if (cleanedWord.length > 1) {
						result.push(cleanedWord);
					}
				} else {
					break;
				}
			}

			return result;
		}
	}

	#scrollOnKey()
	{
		const self = this;
		window.addEventListener('keydown', function(e)
		{
			if(e.code.startsWith('Digit'))
			{
				const elemToBeScrolled = self.#element;
				const percent = parseInt(e.code.substring(5)) / 10
				const scrollPosition = percent * (elemToBeScrolled.scrollHeight - window.innerHeight);
				window.scrollTo({ top: scrollPosition });
			}
		})
	}

	#toggleImagesOnKey()
	{
		const self = this;
		window.addEventListener("keydown", function(e)
		{
			if(e.code == "F2")
			{
				e.preventDefault()
				toggleImages()
			}
		})
		function toggleImages() {
			var images = self.#mid.getElementsByTagName('img');
			for (var i = 0; i < images.length; i++) {
				var image = images[i];
				if (image.style.display === 'none') {
					image.style.display = 'block'; // Show the image if it's hidden
				} else {
					image.style.display = 'none'; // Hide the image if it's visible
				}
			}
		}
	}

	#isMobileMode = false;
	#toggleMobileViewOnKey()
	{
		const self = this;

		this.#isMobileMode = localStorage.getItem('isMobileMode') === 'true';

		check()

		window.addEventListener("keydown", function(e)
		{
			if(e.code == "F1")
			{
				e.preventDefault();
				
				self.#isMobileMode = !self.#isMobileMode
				localStorage.setItem('isMobileMode', self.#isMobileMode)
				check()
			}
		})

		function check()
		{
			if(self.#isMobileMode)
			{
				self.hideLeftPanel();
				self.hideRightPanel();
			}
			else
			{
				self.hideLeftPanel(false);
				self.hideRightPanel(false);
			}
		}
	}

	#watchResize()
	{
		const self = this;
		function logic(width, height)
		{
			if(self.#isMobileMode) // do not resize if mobile mode
				return
			if(width*.8 < height)
			{
				// mobile
				self.hideLeftPanel();
				self.hideRightPanel();
			}
			else
			{
				// desktop
				self.hideLeftPanel(false);
				self.hideRightPanel(false);
			}
		}
		const resizeObserver = new ResizeObserver(entries => {
			for (let entry of entries) {
				const { width, height } = entry.contentRect;
				logic(width, height)
			}
		});
		resizeObserver.observe(this.#container.parentNode);
		logic(this.#container.clientWidth, window.innerHeight)
	}
}

