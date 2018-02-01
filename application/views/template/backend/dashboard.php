<?php $this->load->view('template/backend/partials/header'); ?>
<body class="page-body page-fade-only skin-blue" data-url="http://neon.dev">

    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
    	<?php $this->load->view('template/backend/partials/menu'); ?>
    	<div class="main-content">
    		<div class="row">
	        	<!-- Profile Info and Notifications -->
	        	<div class="col-md-6 col-sm-8 clearfix">

	        		<ul class="user-info pull-left pull-none-xsm">

	        			<!-- Profile Info -->
	        			<li class="profile-info dropdown">
	                    <!-- add class "pull-right" if you want to place this from right -->

	        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	        					<img src="<?= base_url() ?>assets/images/thumb-1@2xx.png" alt="" class="img-circle" width="44" />
	        					<?php echo$this->session->userdata('identity'); ?>
	        				</a>

	        				<ul class="dropdown-menu">

	        					<!-- Reverse Caret -->
	        					<li class="caret"></li>
	        					<!-- Profile sub-links -->

	        					<li>
	        						<a href="mailbox.html">
	        							<i class="entypo-mail"></i>
	        							Inbox
	        						</a>
	        					</li>

	        					<li>
	        						<a href="<?php echo base_url() ?>admin/Auth/logout">
	        							<i class="entypo-logout"></i>
	        							Logout
	        						</a>
	        					</li>
	        				</ul>
	        			</li>

	        		</ul>

	        		<ul class="user-info pull-left pull-right-xs pull-none-xsm">

	        			<!-- Message Notifications -->
	        			<li class="notifications dropdown">

	        				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
	        					<i class="entypo-mail"></i>
	        					<span class="badge badge-secondary"></span>
	        				</a>

	        				<ul class="dropdown-menu">
	        			<li>
	                	<ul class="dropdown-menu-list scroller">
	                		<li class="active">
	                			<a href="#">
	                				<span class="image pull-right">
	                					<img src="<?= base_url() ?>assets/images/thumb-1.png" alt="" class="img-circle" />
	                				</span>

	                				<span class="line">
	                					<strong>Luc Chartier</strong>
	                					- yesterday
	                				</span>

	                				<span class="line desc small">
	                					This ain’t our first item, it is the best of the rest.
	                				</span>
	                			</a>
	                		</li>

	                		<li class="active">
	                			<a href="#">
	                				<span class="image pull-right">
	                					<img src="<?= base_url() ?>assets/images/thumb-2.png" alt="" class="img-circle" />
	                				</span>

	                				<span class="line">
	                					<strong>Salma Nyberg</strong>
	                					- 2 days ago
	                				</span>

	                				<span class="line desc small">
	                					Oh he decisively impression attachment friendship so if everything.
	                				</span>
	                			</a>
	                		</li>

	                		<li>
	                			<a href="#">
	                				<span class="image pull-right">
	                					<img src="<?= base_url() ?>assets/images/thumb-3.png" alt="" class="img-circle" />
	                				</span>

	                				<span class="line">
	                					Hayden Cartwright
	                					- a week ago
	                				</span>

	                				<span class="line desc small">
	                					Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
	                				</span>
	                			</a>
	                		</li>

	                		<li>
	                			<a href="#">
	                				<span class="image pull-right">
	                					<img src="<?= base_url() ?>assets/images/thumb-4.png" alt="" class="img-circle" />
	                				</span>

	                				<span class="line">
	                					Sandra Eberhardt
	                					- 16 days ago
	                				</span>

	                				<span class="line desc small">
	                					On so attention necessary at by provision otherwise existence direction.
	                				</span>
	                			</a>
	                		</li>
	                	</ul>
	            </li>

	                <li class="external">
	                	<a href="mailbox.html">All Messages</a>
	                </li>
	            </ul>

	            </li>

	        	</div>

	        </div>

	        <hr />

			<!-- konten disini -->
    		<?= $contents; ?>

      <!--   </div>
      </div> -->
    <br />

<?php $this->load->view('template/backend/partials/footer'); ?>
