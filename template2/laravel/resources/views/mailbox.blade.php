@extends('layouts.app')

@section('content')
    <h3>MailBox</h3>
    <ol class="breadcrumb">
       <li><a href="#">Home</a>
       </li>
       <li><a href="#">Mailbox</a>
       </li>
       <li class="active">Inbox</li>
    </ol>
    <div class="row">
       <div class="col-lg-2 col-md-12">
          <div class="clearfix mb-lg">
             <button type="button" data-toggle="collapse" data-target=".mb-boxes" class="btn btn-sm btn-default hidden-lg pull-right">
                <em class="fa fa-bars fa-fw fa-lg"></em>
             </button>
             <button type="button" class="btn btn-danger mb-compose-button">
                <em class="fa fa-pencil"></em>
                <span>Compose</span>
             </button>
          </div>
          <!-- START mailbox list-->
          <div class="mb-boxes">
             <div class="panel panel-default">
                <div class="panel-body">
                   <ul class="nav nav-pills nav-stacked">
                      <li class="p">
                         <small class="text-muted">MAILBOXES</small>
                      </li>
                      <li class="active">
                         <a href="#">
                            <span class="label label-primary pull-right">42</span>
                            <em class="fa fa-inbox fa-fw fa-lg"></em>
                            <span>Inbox</span>
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <span class="label label-success pull-right">10</span>
                            <em class="fa fa-star fa-fw fa-lg"></em>
                            <span>Starred</span>
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <span class="label label-danger pull-right">2</span>
                            <em class="fa fa-paper-plane-o fa-fw fa-lg"></em>
                            <span>Sent</span>
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <span class="label label-warning pull-right">5</span>
                            <em class="fa fa-edit fa-fw fa-lg"></em>
                            <span>Drafts</span>
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <span class="label label-green pull-right">12</span>
                            <em class="fa fa-trash-o fa-fw fa-lg"></em>
                            <span>Trash</span>
                         </a>
                      </li>
                      <li class="p">
                         <small class="text-muted">Labels</small>
                      </li>
                      <li class="p-h">
                         <a href="#" class="pv-sm">
                            <span class="circle circle-danger"></span>
                            <span>Red</span>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="pv-sm">
                            <span class="circle circle-pink"></span>
                            <span>Pink</span>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="pv-sm">
                            <span class="circle circle-info"></span>
                            <span>Blue</span>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="pv-sm">
                            <span class="circle circle-warning"></span>
                            <span>Yellow</span>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <!-- END mailbox list-->
       </div>
       <div class="clearfix hidden-lg"></div>
       <div class="col-lg-10 col-sm-12">
          <!-- START action buttons-->
          <div class="clearfix mb">
             <div class="btn-group pull-left">
                <button type="button" class="btn btn-default btn-sm">
                   <em class="fa fa-mail-reply text-gray-dark"></em>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                   <em class="fa fa-mail-reply-all text-gray-dark"></em>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                   <em class="fa fa-mail-forward text-gray-dark"></em>
                </button>
             </div>
             <div class="btn-group pull-right">
                <button type="button" class="btn btn-default btn-sm">
                   <em class="fa fa-exclamation text-gray-dark"></em>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                   <em class="fa fa-times text-gray-dark"></em>
                </button>
             </div>
          </div>
          <!-- END action buttons-->
          <!-- START Mails-->
          <div class="panel panel-default">
             <div class="panel-body">
                <table class="table table-hover mb-mails">
                   <tbody>
                      <tr class="mb-mail-active">
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" checked="checked" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star fa-lg text-warning"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/01.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Antonio Griffin</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star-o fa-lg text-muted"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/02.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Bernard Elliott</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star-o fa-lg text-muted"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/03.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Alfredo Fletcher</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star-o fa-lg text-muted"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/04.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Mitchell Burke</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star-o fa-lg text-muted"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/05.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Joel Miles</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star-o fa-lg text-muted"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/06.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Alyssa Kim</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star-o fa-lg text-muted"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/07.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Jim Cruz</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star-o fa-lg text-muted"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/08.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Rebecca Griffin</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star-o fa-lg text-muted"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/09.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Gwendolyn Wood</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star-o fa-lg text-muted"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/10.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Bobbie Fox</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="checkbox c-checkbox">
                               <label>
                                  <input type="checkbox" />
                                  <span class="fa fa-check"></span>
                               </label>
                            </div>
                         </td>
                         <td class="text-center">
                            <em class="fa fa-star-o fa-lg text-muted"></em>
                         </td>
                         <td>
                            <div class="mb-mail-date">10:30pm</div>
                            <img src="assets/img/user/11.jpg" alt="Mail Avatar" class="mb-mail-avatar" />
                            <div class="pull-left">
                               <div class="mb-mail-from">Elizabeth Castillo</div>
                               <div class="mb-mail-subject">Sed fringilla molestie convallis.</div>
                            </div>
                            <div class="mb-mail-preview">Mauris hendrerit nibh eu nisi congue dapibus. Quisque pharetra, arcu a consectetur aliquet, mi enim porta enim, quis sodales nisl justo et justo...</div>
                         </td>
                      </tr>
                   </tbody>
                </table>
             </div>
          </div>
          <!-- END Mails-->
       </div>
    </div>
@endsection