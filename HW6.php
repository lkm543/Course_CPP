<h3><a href="Lectures\HW6.pdf">PDF下載連結</a></h3> 

<h1>作業6 函式與遞迴</h1>

<h2>6-1：函式基礎─3n+1假說</h2>
	<h3>3n+1假說指的是任意取一數n，如果n為奇數則讓n變成3n+1，若n為偶數則讓n變成n/2，周而復始直至n為1為止，該假說認為對任意數n都可以再不斷運算下得到最後的結果1。下面以85為例子：</h3>
	<h3>85→3*85+1=256→256/2=128→128/2=64→64/2=32→32/2=16→16/2=8→8/2=4→4/2=2→2/2=1</h3>
	<h3>請撰寫一個函式：</h3>
	<h3>當傳入值為奇數，回傳3n+1</h3>
	<h3>當傳入值為偶數，回傳n/2</h3>
	<h3>接著使用while loop不斷呼叫你寫的函式，直至回傳值為1。</h3>
	<img src="images/HW6_1.png" style="display:block; margin:auto;">

<h2>6-2：設計函式</h2>
	<h3>請設計一個函式，其輸入值為一個陣列，輸出值為其最大值與最小值。即完成以下程式碼紅色部分。(不可修改黑色與藍色字部分)</h3>
	<h3>Hint：因為這裡需要回傳兩個值，需使用Pass by reference (&)</h3>
	<script src="https://gist.github.com/anonymous/2e9758e904cfbf451b230da78ad78932.js"></script>
	<img src="images/HW6_2.png" style="display:block; margin:auto;">

<h2>6-3：模組化程式</h2>
	<h3>在之前的練習中，我們有寫過幫使用者算質因數的程式，但那時候我們沒有導入函式的概念，以至於for迴圈裏頭又有for迴圈，for迴圈裏頭又有一大堆運算式。現在請你使用學到的函式概念，把質因數的兩個定義：判別是否為質數、判別是否為因數分別寫成一個函式，接著在for裡面直接呼叫這兩個函式，讓程式碼的可讀性與可維護性提高，也順帶感受一下函式的精隨。</h3>
	<h3>回憶一下：該程式可以讓使用者不停地輸入一個數，而後判別該數是否為正數。但這次請你使用函式判別是否為質數與因數！</h3>
	<h3>如果是正數便輸出該數的所有質因數後請使用者再行輸入。</h3>
	<h3>但若輸入為負數，則輸出錯誤訊息並請使用者重新輸入。</h3>
	<h3>但當使用者輸入0時結束程式。</h3>
	<img src="images/HW6_3.png" style="display:block; margin:auto;">

<h2>6-4：二分逼近法與遞迴</h2>
	<h3>開根號、三角函數等運算往往需要耗費大量的時間與運算資源，然而在沒有公式輔助下，若需要的並不是完美的解答時，可以使用二分逼近法求出一個近式值。因此6-4的部分請你設計一個程式可以讓使用者輸入一個數x與可容許誤差E，而後透過遞迴式利用二分逼近法求出√x的值，誤差範圍需在E以內。</h3>
	<h3>Hint: <a href="https://zh.wikipedia.org/wiki/二分法_(數學)">https://zh.wikipedia.org/wiki/二分法_(數學)</a></h3>
	<img src="images/HW6_4.png" style="display:block; margin:auto;">

<br>
<br>
<br>
