<?php 
// we want to check if user is logged in to allow access
session_start();
if (isset($_SESSION['logged_in'])){
    // redirect to index.php
} else{
    header('location:auth.php');
}
include('includes/adminheader.php') 
?>
<!-- Main content -->
<div class="h-screen px-3 px-lg-7 flex-grow-1 overflow-y-lg-auto">
    <header class="bg-surface-secondary border-top">
        <div class="container-xl">
            <div class="py-5 border-bottom">
                <!-- Page heading -->
                <div>
                    <div class="row align-items-center">
                        <div class="col-md-6 col-12 mb-3 mb-md-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">Authors</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-md-6 col-12 text-md-end">
                            <div class="mx-n1">
                                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </span>
                                    <span>Edit</span>
                                </a>
                                <a href="add_author.php" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Create</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="py-10 bg-surface-secondary">
        <!-- Container -->
        <div class="container-xl">
            <!-- <div class="border border-2 bg-surface-secondary h-2 border-dashed rounded d-flex flex-column justify-content-center align-items-center" style="min-height: 400px;">
          </div> -->
            <!-- team members table -->
            <div class="card mb-7">
                <div class="card-header">
                    <h5 class="mb-0">Team Members</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Date Joined</th>
                                <th scope="col">Company</th>
                                <th scope="col">Blog written</th>
                                <th scope="col">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img alt="..."
                                        src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                        class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Robert Fox
                                    </a>
                                </td>
                                <td>
                                    Feb 15, 2021
                                </td>
                                <td>
                                    <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-1.png"
                                        class="avatar avatar-xs rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Dribbble
                                    </a>
                                </td>
                                <td>
                                    $3.500
                                </td>
                                <td>
                                    <span class="badge badge-lg badge-dot">
                                        <i class="bg-success"></i>Scheduled
                                    </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="..."
                                        src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                        class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Darlene Robertson
                                    </a>
                                </td>
                                <td>
                                    Apr 15, 2021
                                </td>
                                <td>
                                    <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-2.png"
                                        class="avatar avatar-xs rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Netguru
                                    </a>
                                </td>
                                <td>
                                    $2.750
                                </td>
                                <td>
                                    <span class="badge badge-lg badge-dot">
                                        <i class="bg-warning"></i>Postponed
                                    </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="..."
                                        src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                        class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Theresa Webb
                                    </a>
                                </td>
                                <td>
                                    Mar 20, 2021
                                </td>
                                <td>
                                    <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-3.png"
                                        class="avatar avatar-xs rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Figma
                                    </a>
                                </td>
                                <td>
                                    $4.200
                                </td>
                                <td>
                                    <span class="badge badge-lg badge-dot">
                                        <i class="bg-success"></i>Scheduled
                                    </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="..."
                                        src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                        class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Kristin Watson
                                    </a>
                                </td>
                                <td>
                                    Feb 15, 2021
                                </td>
                                <td>
                                    <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-4.png"
                                        class="avatar avatar-xs rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Mailchimp
                                    </a>
                                </td>
                                <td>
                                    $3.500
                                </td>
                                <td>
                                    <span class="badge badge-lg badge-dot">
                                        <i class="bg-dark"></i>Not discussed
                                    </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="..."
                                        src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                        class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Cody Fisher
                                    </a>
                                </td>
                                <td>
                                    Apr 10, 2021
                                </td>
                                <td>
                                    <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png"
                                        class="avatar avatar-xs rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Webpixels
                                    </a>
                                </td>
                                <td>
                                    $1.500
                                </td>
                                <td>
                                    <span class="badge badge-lg badge-dot">
                                        <i class="bg-danger"></i>Canceled
                                    </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer border-0 py-5">
                    <span class="text-muted text-sm">Showing 5 items out of 10 results found</span>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/adminfooter.php') ?>