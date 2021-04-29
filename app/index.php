<!DOCTYPE html>
<html data-darkreader-mode="dynamic" data-darkreader-scheme="dark"><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252"><style class="darkreader darkreader--fallback" media="screen"></style><style class="darkreader darkreader--text" media="screen"></style><style class="darkreader darkreader--invert" media="screen">.jfk-bubble.gtx-bubble, .captcheck_answer_label > input + img, span#closed_text > img[src^="https://www.gstatic.com/images/branding/googlelogo"], span[data-href^="https://www.hcaptcha.com/"] > #icon, #bit-notification-bar-iframe, embed[type="application/pdf"] {
    filter: invert(100%) hue-rotate(180deg) contrast(90%) !important;
}</style><style class="darkreader darkreader--inline" media="screen">[data-darkreader-inline-bgcolor] {
  background-color: var(--darkreader-inline-bgcolor) !important;
}
[data-darkreader-inline-bgimage] {
  background-image: var(--darkreader-inline-bgimage) !important;
}
[data-darkreader-inline-border] {
  border-color: var(--darkreader-inline-border) !important;
}
[data-darkreader-inline-border-bottom] {
  border-bottom-color: var(--darkreader-inline-border-bottom) !important;
}
[data-darkreader-inline-border-left] {
  border-left-color: var(--darkreader-inline-border-left) !important;
}
[data-darkreader-inline-border-right] {
  border-right-color: var(--darkreader-inline-border-right) !important;
}
[data-darkreader-inline-border-top] {
  border-top-color: var(--darkreader-inline-border-top) !important;
}
[data-darkreader-inline-boxshadow] {
  box-shadow: var(--darkreader-inline-boxshadow) !important;
}
[data-darkreader-inline-color] {
  color: var(--darkreader-inline-color) !important;
}
[data-darkreader-inline-fill] {
  fill: var(--darkreader-inline-fill) !important;
}
[data-darkreader-inline-stroke] {
  stroke: var(--darkreader-inline-stroke) !important;
}
[data-darkreader-inline-outline] {
  outline-color: var(--darkreader-inline-outline) !important;
}
[data-darkreader-inline-stopcolor] {
  stop-color: var(--darkreader-inline-stopcolor) !important;
}</style><style class="darkreader darkreader--variables" media="screen">:root {
   --darkreader-neutral-background: #131516;
   --darkreader-neutral-text: #d8d4cf;
   --darkreader-selection-background: #004daa;
   --darkreader-selection-text: #e8e6e3;
}</style><style class="darkreader darkreader--root-vars" media="screen"></style><script class="darkreader darkreader--proxy">(function injectProxy() {
        document.dispatchEvent(new CustomEvent('__darkreader__inlineScriptsAllowed'));
        const addRuleDescriptor = Object.getOwnPropertyDescriptor(CSSStyleSheet.prototype, 'addRule');
        const insertRuleDescriptor = Object.getOwnPropertyDescriptor(CSSStyleSheet.prototype, 'insertRule');
        const deleteRuleDescriptor = Object.getOwnPropertyDescriptor(CSSStyleSheet.prototype, 'deleteRule');
        const removeRuleDescriptor = Object.getOwnPropertyDescriptor(CSSStyleSheet.prototype, 'removeRule');
        const shouldWrapDocStyleSheets = location.hostname.endsWith('pushbullet.com') || location.hostname.endsWith('ilsole24ore.com');
        const documentStyleSheetsDescriptor = shouldWrapDocStyleSheets ? Object.getOwnPropertyDescriptor(Document.prototype, 'styleSheets') : null;
        const cleanUp = () => {
            Object.defineProperty(CSSStyleSheet.prototype, 'addRule', addRuleDescriptor);
            Object.defineProperty(CSSStyleSheet.prototype, 'insertRule', insertRuleDescriptor);
            Object.defineProperty(CSSStyleSheet.prototype, 'deleteRule', deleteRuleDescriptor);
            Object.defineProperty(CSSStyleSheet.prototype, 'removeRule', removeRuleDescriptor);
            document.removeEventListener('__darkreader__cleanUp', cleanUp);
            document.removeEventListener('__darkreader__addUndefinedResolver', addUndefinedResolver);
            if (shouldWrapDocStyleSheets) {
                Object.defineProperty(Document.prototype, 'styleSheets', documentStyleSheetsDescriptor);
            }
        };
        const addUndefinedResolver = (e) => {
            customElements.whenDefined(e.detail.tag).then(() => {
                document.dispatchEvent(new CustomEvent('__darkreader__isDefined', { detail: { tag: e.detail.tag } }));
            });
        };
        document.addEventListener('__darkreader__cleanUp', cleanUp);
        document.addEventListener('__darkreader__addUndefinedResolver', addUndefinedResolver);
        const updateSheetEvent = new Event('__darkreader__updateSheet');
        function proxyAddRule(selector, style, index) {
            addRuleDescriptor.value.call(this, selector, style, index);
            if (this.ownerNode && !this.ownerNode.classList.contains('darkreader')) {
                this.ownerNode.dispatchEvent(updateSheetEvent);
            }
            return -1;
        }
        function proxyInsertRule(rule, index) {
            const returnValue = insertRuleDescriptor.value.call(this, rule, index);
            if (this.ownerNode && !this.ownerNode.classList.contains('darkreader')) {
                this.ownerNode.dispatchEvent(updateSheetEvent);
            }
            return returnValue;
        }
        function proxyDeleteRule(index) {
            deleteRuleDescriptor.value.call(this, index);
            if (this.ownerNode && !this.ownerNode.classList.contains('darkreader')) {
                this.ownerNode.dispatchEvent(updateSheetEvent);
            }
        }
        function proxyRemoveRule(index) {
            removeRuleDescriptor.value.call(this, index);
            if (this.ownerNode && !this.ownerNode.classList.contains('darkreader')) {
                this.ownerNode.dispatchEvent(updateSheetEvent);
            }
        }
        function proxyDocumentStyleSheets() {
            const docSheets = documentStyleSheetsDescriptor.get.call(this);
            const filtered = [...docSheets].filter((styleSheet) => {
                return !styleSheet.ownerNode.classList.contains('darkreader');
            });
            return Object.setPrototypeOf(filtered, StyleSheetList.prototype);
        }
        Object.defineProperty(CSSStyleSheet.prototype, 'addRule', Object.assign({}, addRuleDescriptor, { value: proxyAddRule }));
        Object.defineProperty(CSSStyleSheet.prototype, 'insertRule', Object.assign({}, insertRuleDescriptor, { value: proxyInsertRule }));
        Object.defineProperty(CSSStyleSheet.prototype, 'deleteRule', Object.assign({}, deleteRuleDescriptor, { value: proxyDeleteRule }));
        Object.defineProperty(CSSStyleSheet.prototype, 'removeRule', Object.assign({}, removeRuleDescriptor, { value: proxyRemoveRule }));
        if (shouldWrapDocStyleSheets) {
            Object.defineProperty(Document.prototype, 'styleSheets', Object.assign({}, documentStyleSheetsDescriptor, { get: proxyDocumentStyleSheets }));
        }
    })()</script><style class="darkreader darkreader--user-agent" media="screen">html {
    background-color: #181a1b !important;
}
html, body, input, textarea, select, button {
    background-color: #181a1b;
}
html, body, input, textarea, select, button {
    border-color: #736b5e;
    color: #e8e6e3;
}
a {
    color: #3391ff;
}
table {
    border-color: #545b5e;
}
::placeholder {
    color: #b2aba1;
}
input:-webkit-autofill,
textarea:-webkit-autofill,
select:-webkit-autofill {
    background-color: #555b00 !important;
    color: #e8e6e3 !important;
}
::-webkit-scrollbar {
    background-color: #202324;
    color: #aba499;
}
::-webkit-scrollbar-thumb {
    background-color: #454a4d;
}
::-webkit-scrollbar-thumb:hover {
    background-color: #575e62;
}
::-webkit-scrollbar-thumb:active {
    background-color: #484e51;
}
::-webkit-scrollbar-corner {
    background-color: #181a1b;
}
* {
    scrollbar-color: #454a4d #202324;
}
::selection {
    background-color: #004daa !important;
    color: #e8e6e3 !important;
}
::-moz-selection {
    background-color: #004daa !important;
    color: #e8e6e3 !important;
}</style>
  <title>Ticketbox</title>
  <link rel="stylesheet" type="text/css" href="Ticketbox_arquivos/reset.css"><style class="darkreader darkreader--sync" media="screen"></style>
  <link rel="stylesheet" type="text/css" href="Ticketbox_arquivos/style.css"><style class="darkreader darkreader--sync" media="screen"></style>
  <link href="Ticketbox_arquivos/css.css" rel="stylesheet">
  <link href="Ticketbox_arquivos/css_002.css" rel="stylesheet">
  <script src="Ticketbox_arquivos/vue.js" defer="defer"></script>
  <script src="Ticketbox_arquivos/app.js" defer="defer"></script>
<meta name="darkreader" content="8f8f21a5333887f7308916a022ee4096"><style class="darkreader darkreader--override" media="screen">.vimvixen-hint {
    background-color: #7b5300 !important;
    border-color: #d8b013 !important;
    color: #f3e8c8 !important;
}
::placeholder {
    opacity: 0.5 !important;
}
a[href="https://coinmarketcap.com/"] > svg[width="94"][height="16"] > path {
    fill: var(--darkreader-neutral-text) !important;
}
#edge-translate-panel-body {
    color: var(--darkreader-neutral-text) !important;
}</style></head>
<body>
  <div id="app"><header><img src="Ticketbox_arquivos/ticket_logo.svg" alt="logo" class="logo"> <h1>TICKETBOX</h1></header> <!----> <form><div class="form-row"><div class="form-field"><label for="first-name">First Name</label> <input type="text" id="first-name"></div> <div class="form-field"><label for="last-name">Last Name</label> <input type="text" id="last-name"></div></div> <div class="form-row"><div class="form-field"><label for="email">Email</label> <input type="text" id="email" class="required"></div></div> <div class="form-row"><div class="form-field"><label for="ticket-quantity">Ticket Quantity</label> <select id="ticket-quantity"><option selected="selected">1</option> <option>2</option> <option>3</option> <option>4</option></select></div> <div class="form-field"><legend>Ticket Type</legend> <div><input type="radio" id="general" value="general" checked="checked"> <label for="general">General Admission</label></div> <div><input type="radio" id="vip" value="vip"> <label for="vip">VIP</label></div></div></div> <div class="form-row checkbox"><fieldset><legend>How did you hear about this event?</legend> <div><input type="checkbox" id="friend" value="friend"> <label for="friend">Friend</label></div> <div><input type="checkbox" id="publication" value="publication"> <label for="publication">Publication</label></div> <div><input type="checkbox" id="social-media" value="social"> <label for="social-media">Social Media</label></div></fieldset></div> <div class="form-row vertical"><label for="requests">Special requests</label> <textarea id="requests"></textarea></div> <div class="form-row vertical agreement checkbox"><fieldset><legend>Purchase Agreement</legend> <p>I, , wish to buy 1 General Admission ticket. I understand that all ticket sales are final.</p> <input type="checkbox" name="agreement" id="agree"> <label for="agree">I Agree</label></fieldset></div> <div class="form-row vertical"><label for="signature">Signature</label> <input id="signature" class="signature"></div> <div><button type="reset" class="reset">Reset</button> <button type="submit" disabled="disabled" class="">Confirm Tickets
        </button></div></form></div>

</body></html>