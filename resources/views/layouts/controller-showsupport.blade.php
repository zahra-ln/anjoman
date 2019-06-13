<div ng-controller="SupportController">
    <style>
        table, td, th {
            border: 1px solid #ddd;
            text-align:center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 15px;
        }
    </style>
    <div align="center" style="    border: solid 1px; padding: 12px 0; font-size: 21px;">نمایش کمک ها</div>
    <table class="table" >
    <tbody>
    <tr>

        <th scope="row">کد ثبت</th>
        <td>نهاد حمایتی</td>
        <td>نوع حمایت</td>
        <td>مبلغ</td>
        <td>تاریخ</td>
        <td>کد بیمار</td>

        <td class="table-buttons">
          عملیات
        </td>
    </tr>
    <tr ng-repeat="support in supports track by $index">
        <th scope="row">@{{id}}</th>
        <td>@{{helper}}</td>
        <td>@{{typeofhelp}}</td>
        <td>@{{amount}}</td>
        <td>@{{date}}</td>
        <td>@{{patient_id}}</td>

        <td class="table-buttons">
            <button confirmed-click="delete(support.id)" ng-confirm-click="از حذف این مورد مطمئن هستید ؟"
                    class="btn btn-outline-danger btn-sm"
                    data-title="Delete" data-toggle="modal"
                    data-target="#delete" title="حذف"><i
                        class="fas fa-trash"></i>
            </button>
        </td>
    </tr>
    </tbody>
</table>
</div>