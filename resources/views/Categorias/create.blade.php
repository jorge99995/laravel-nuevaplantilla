
<div class="modal fade" id="modal_crear_curso" tabindex="-1"
aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header" id="kt_modal_add_user_header">

            <h2 class="fw-bold">Agregar Categoria</h2>

            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                data-kt-users-modal-action="close">
                <i class="ki-duotone ki-cross fs-1"><i
                        class="path1"></i><i class="path2"></i></i>
            </div>

        </div>

        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form id="kt_modal_add_user_form" class="form" action="#">
                <!--begin::Scroll-->
                <div class="d-flex flex-column scroll-y me-n7 pe-7"
                    id="kt_modal_add_user_scroll" data-kt-scroll="true"
                    data-kt-scroll-activate="{default: false, lg: true}"
                    data-kt-scroll-max-height="auto"
                    data-kt-scroll-dependencies="#kt_modal_add_user_header"
                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                    data-kt-scroll-offset="300px">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">

                        <label
                            class="d-block fw-semibold fs-6 mb-5 ">Imagen</label>

                        <style>
                            .image-input-placeholder {
                                background-image: url('../../../assets/media/svg/files/blank-image.svg');
                            }

                            [data-bs-theme="dark"] .image-input-placeholder {
                                background-image: url('../../../assets/media/svg/files/blank-image-dark.svg');
                            }
                        </style>

                        <div class="image-input image-input-outline image-input-placeholder text-center"
                            data-kt-image-input="true">

                            <div class="image-input-wrapper w-125px h-125px text-center "
                                style="background-image: url(../../../assets/media/avatars/300-6.jpg);">
                            </div>



                            <label
                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change"
                                data-bs-toggle="tooltip"
                                title="Change avatar">
                                <i class="ki-duotone ki-pencil fs-7"><i
                                        class="path1"></i><i
                                        class="path2"></i></i>
                                <!--begin::Inputs-->
                                <input type="file" name="avatar"
                                    accept=".png, .jpg, .jpeg">
                                <input type="hidden"
                                    name="avatar_remove">
                                <!--end::Inputs-->
                            </label>

                            <span
                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel"
                                data-bs-toggle="tooltip"
                                title="Cancel avatar">
                                <i class="ki-duotone ki-cross fs-2"><i
                                        class="path1"></i><i
                                        class="path2"></i></i> </span>

                            <span
                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove"
                                data-bs-toggle="tooltip"
                                title="Remove avatar">
                                <i class="ki-duotone ki-cross fs-2"><i
                                        class="path1"></i><i
                                        class="path2"></i></i> </span>

                        </div>


                        <div class="form-text">Allowed file types: png,
                            jpg, jpeg.</div>

                    </div>

                    <div class="fv-row mb-7">

                        <label
                            class="required fw-semibold fs-6 mb-2">Categoria</label>



                        <input type="text" name="user_name"
                            class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="Ingrese la Categoria" >

                    </div>


                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label
                            class="required fw-semibold fs-6 mb-2">Descripcion de la Categoria</label>



                        <input type="text" name="user_email"
                            class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="ingrese la descripcion de la Categoria"
                         >

                    </div>



                </div>

                <div class="text-center pt-15">
                    <button type="reset" class="btn btn-light me-3"
                        data-kt-users-modal-action="cancel" >
                        Cancelar
                    </button>

                    <button type="submit" class="btn btn-primary"
                        data-kt-users-modal-action="submit">
                        <span class="indicator-label">
                            Guardar
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span
                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>

</div>



