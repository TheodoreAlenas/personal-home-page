// License at the bottom.

function setUpThemeSwitches() {
  forEachThemeSwitch(makeItToggleTheTheme);
}

function applyStoredTheme() {
  if (getThemeIsDark())
    showDarkness();
  else
    showBrightness();
}

function forEachThemeSwitch(callback) {
  const themeSwitches = document.getElementsByClassName("theme-switch");
  for (let i = 0; i < themeSwitches.length; i++)
    callback(themeSwitches[i]);
}
function makeItToggleTheTheme(themeSwitch) {
  themeSwitch.addEventListener("click", toggleTheme);
}

function getThemeIsDark() {
  return "dark" === localStorage.getItem('preferredTheme');
}
function storeDarkTheme() {
  localStorage.setItem('preferredTheme', 'dark');
}
function storeLightTheme() {
  localStorage.setItem('preferredTheme', 'light');
}
function showDarkness() {
  const classList = document.getElementById('theme-wrapper').classList;
  classList.remove("light-themed");
  classList.add("dark-themed");
}
function showBrightness() {
  const classList = document.getElementById('theme-wrapper').classList;
  classList.remove("dark-themed");
  classList.add("light-themed");
}

function makeItDark() {
  showDarkness();
  storeDarkTheme();
}
function makeItBright() {
  showBrightness();
  storeLightTheme();
}

function toggleTheme() {
  if (getThemeIsDark())
    makeItBright();
  else
    makeItDark();
}

/*
Copyright (c) 2023 Dimakopoulos Theodoros

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
