<div>
  <table align="center" width="694" border="0" cellpadding="0" cellspacing="0"
         style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px">
    <tbody>
      <tr>
        <td style=" width: 100%" >
          <strong>Dear,</strong><br>
          <br>
          <p>You have received new comment in payout request #{{$comment->payoutRequestId}} from {{$sender->username}}</p>
          <p><strong>Comment</strong></p>
          <p>{{$comment->text}}</p>

        </td>
      </tr>
      <tr style="margin-bottom: 15px;"><td></td></tr>
      <tr>
        <td style="text-align:center" bgcolor="#F0F0F0">© {{Date('Y')}} {{app('settings')['siteName']}}</td>
      </tr>
    </tbody>
  </table>
</div>