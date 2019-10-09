<style>
    #dd{display:inline;  margin-right: 120px}
   </style>
<div ng-controller="LettersController">
    <div class="row" style="margin: 20px">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    نمایش نامه
                </div>
<br>
<div  id="dd" >
    <div style="float: right; width:20%;height: 10%" ><img src="images/a.jpg" width=" 80" height="70"></div>

    <div  style="float: right;width:40%;height: 20%">
        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;یا من اسمه شفاء</h6>
        <h6> انجمن خیریه حمایت از بیماران کلیوی ایران</h6>
        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;شعبه ویژه قاین</h6>
    </div>

    <div id="3" class="card-body"  style="float: right ;width: 30%;height: 20%" >
        <div>تاریخ :&nbsp;&nbsp;&nbsp;@{{date}}</div>
        <div>شماره :&nbsp;&nbsp;&nbsp;@{{shomare}}</div>
        <div>پیوست:&nbsp;&nbsp;&nbsp;@{{attach}}</div>

    </div>

</div>
                <br>
                <br>

                <div style="width: 700px;height: 850px;  margin-right: 130px" ng-bind-html="textarea" ></div>
<br><br><br>
                <div style="margin-right: 150px">
                    <p style="font-size: small" >آدرس:خراسان جنوبی.قاین.خیابان شهید امین زاده.چهارراه دکترا</p>
                    <p style="font-size: small">تلفکس:056325228599 &nbsp; تلفن دار الشفاء:05632530041 &nbsp; همراه:09153629772</p>
                    <p style="font-size: small">شماره حساب کمک های مردمی:0106467269009 سیبا&nbsp;&nbsp; شماره کارت:6037991199512587</p>
                </div>

            </div>

        </div>
    </div>
</div>
</div>