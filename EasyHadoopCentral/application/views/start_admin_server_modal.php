<style type="text/css">
#error_rack
{
	padding-left:15px;
	color:Red;
}
</style>

<div id="start_admin_server" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form action="<?php echo $this->config->base_url();?>index.php/manage/startadminserver/" method="POST">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="myModalLabel"><?php echo "启动管理服务器"?></h3>
	</div>
	<div class="modal-body">
		<div class="alert alert-error"><?php echo ""?></div>
		
			<tr>
				<td><label><?php echo "本机ROOT 用户名";?></label><input type="text" name="ssh_user" value="root" disabled />
				<input type="hidden" name="ssh_user" value="root" />
				</td>
				<td><label><?php echo "本机ROOT 密  码";?></label><input type="text" name="ssh_pass" placeholder="ssh_pass" />
				</td>
			</tr>
		</table>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary"><?php echo $common_submit;?></button>
	</div>
</form>
</div>