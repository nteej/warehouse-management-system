<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> </title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(3) {
            text-align: right;
        }

        .invoice-box table tr.top table td.title {
            font-size: 20px;
            line-height: 20px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }


        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(3) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(3) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <span>Fature Shitje</span>
                        </td>

                        <td style="text-align: right">
                            Numri Fatures #: ___________
                            <br> Data: {{$date}}

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <table>
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                ECO AL CLEANING.
                                <br> Rruga Islam Zeka, Astir
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </table>
    <table>
        <table border="1">
            <tr class="heading">
                <td>
                    Produkti
                </td>

                <td style="text-align : left">
                    Sasia
                </td>

                <td>
                    Cmimi Shitje
                </td>

                <td>
                    Vlera Totale
                </td>
            </tr>
            @foreach($data as $item)
                <tr class="item">
                    <td>
                        {{$item->name}}
                    </td>

                    <td style="text-align : right">
                        {{$item->sasia}}
                    </td>
                    <td style="text-align : right">
                        {{$item->cmimi}}
                    </td>

                    <td style="text-align : right">
                        {{$item->cmimi * $item->sasia}}
                    </td>
                </tr>
            @endforeach
            <tr class="total">
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align : right">
                    Totali: <b>{{$total}}</b>
                </td>
            </tr>
        </table>
</div>
</body>
</html>
