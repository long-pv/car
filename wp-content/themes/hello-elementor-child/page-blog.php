<?php

/**
 * Template Name: Blog
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package car_theme
 */

get_header();
?>

<!-- News -- Tin tức -->
<section class="secSpace">
	<div class="tabs">
		<a href="#" class="tabs__item">Tin tức</a>
		<a href="#" class="tabs__item tabs__item--active">Kiến thức xe hơi</a>
		<a href="#" class="tabs__item">Chương trình khuyến mãi</a>
		<a href="#" class="tabs__item">Life at CarDoctor</a>
	</div>
</section>

<!--  -->
<section class="secSpace">
	<div class="container">
		<div class="row g-4">
			<div class="col-9">
				<div class="content__inner">
					<!-- Blog Item -->
					<div class="blog-item">
						<div class="row">
							<div class="col-8">
								<a href="#" class="blog-item__image">
									<img src="data:image/jpeg;base64,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"
										alt="Báo chí đưa tin về sự kiện ký kết Biên bản">
								</a>
							</div>
							<div class="col-4">
								<div class="blog-item__content">
									<div class="blog-item__info">
										<a href="" class="blog-item__title line-2">
											<h3 class="line-2"> Báo chí đưa tin về sự kiện ký kết Biên bản dax them
												line-2
											</h3>
										</a>
										<div class="blog-item__meta">
											<div class="blog-item__category">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path d="M13.6668 11.1H10.3335" stroke="#354764"
														stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path
														d="M15.2134 5.33331H8.78671C7.36671 5.33331 6.21338 6.49331 6.21338 7.90665V17.3C6.21338 18.5 7.07338 19.0066 8.12671 18.4266L11.38 16.62C11.7267 16.4266 12.2867 16.4266 12.6267 16.62L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.3V7.90665C17.7867 6.49331 16.6334 5.33331 15.2134 5.33331Z"
														stroke="#354764" stroke-linecap="round"
														stroke-linejoin="round" />
												</svg>
												<span>
													Xe hay
												</span>
											</div>
											<div class="blog-item__date">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path d="M9.3335 5.33331V7.33331" stroke="#354764"
														stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M14.6665 5.33331V7.33331" stroke="#354764"
														stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M6.3335 10.06H17.6668" stroke="#354764"
														stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path
														d="M18 9.66665V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66665C6 7.66665 7 6.33331 9.33333 6.33331H14.6667C17 6.33331 18 7.66665 18 9.66665Z"
														stroke="#354764" stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M14.463 13.1333H14.469" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M14.463 15.1333H14.469" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M11.9972 13.1333H12.0031" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M11.9972 15.1333H12.0031" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M9.52938 13.1333H9.53537" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M9.52938 15.1333H9.53537" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
												</svg>
												<span>16/03/2025</span>
											</div>
										</div>
									</div>
									<p class="blog-item__desc">
										Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
										when
										an unknown printer took a galley of type
									</p>
									<div class="">
										<a href="#" class="blog-item__button">Xem ngay</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Post Item -->
					<a href="#" class="post-item">
						<img class="post-item__image"
							src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSEhMWFhUXFxcVFhcYFhcXFxgWFRUYFhYVFRgYHSggGBolHRYVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGzIlHyUtLS0tLS0vLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKIBNwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAFAQIDBAYAB//EAEAQAAEDAgMFBAgEBQQCAwEAAAEAAhEDIQQxQQUSUWFxIoGRoQYTMkKxwdHwFBVS4SNigpLxFlNyosLSY4OyNP/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EAC8RAAICAQMEAgAEBQUAAAAAAAABAhEDEjFRBBMhQRRhIoGRoRUyQnGxBVJi8PH/2gAMAwEAAhEDEQA/AAv4Nd+DR44VcMKuzumfbAf4RKMIjowqcMLyR3R9oBDCJ4waOfhOScMLyS7odoCDBJ4wSNjDptYsZ7RA6/IJd1sfaXsEjBBOGB5K7Rx1E23o6iEQpUmkS2COV0ObW4LGnsBDs6dFFU2SOC0owo4JwwoU95ldhGOds0jQpPwD+BW0GFCcMIOCr5BPxjE/g3cCntwzhoVthhBwSjBjgj5P0HxfsxgY9P3Ccx5LY/lzeHwXDZjeCXyEHx2ZWkzi3yVunSYdIWhGyWpw2S1J5kylgkgCMAw6BS09lt0COt2W1SDZ5GRUPN9lrD9AVuBHBSNwKNU8GdVM3CKXlLWJAMYFPbgOSOjCp4wqnuj7aAY2fyThgOSOtwyeKCXcY+2gEMCnDBckeGH5JRh+SO4w7aAYwaeMIjYw6d6hLWPQgIMGnDBo16hKKCNYtKAwwae3CIx6hKKKNYaUCRhE8YVFRRTvUo1DpAoYZIi/qVyNQqPM24sfoPknDEt/S7wH1RyngmxopBgW8At24mKjICOqMAmZ5AXTW12zk4c4+iOjAt4BccC3gFNxHUgN65n6vI/RVMRtCLMYTzNh4ZrR/l7eAXDAtPBCcUDUmYqtWrOmXEDgLfuq7cCeC3w2c3gE78ubwC17yWyM3hb3ZghgDwU1DDvYZaSDyW5Gz28AlGAbwCTzAsFGWZtCsBG60niQfkVz8dXOQDeg+srV/l7eAThs9vAKNceDTRPkx7sTXIjePcAPMBR0jWGT38cyfitqcA3klGzm8An3FwLtPky7cfW5H+n6JaePrAmYPIty6RC0/wCWs4BKNmN4KdUeCtEuTK1sXXcfa3eTRHxukGJxER6w+AnxiVrhs1vBcNms5I1rgWiXJj2CrM+sfI/mP1U2HqVmneD3c5JI8CtYNmM5Jw2Y1JzQLG+QPR2q/wB5gPSR9VM7a1rU76SbImNmNS/ljVH4TT8XJn342ucnR0aPndLQr1m++T1g/FaIbManDZrUalwFfYOwu0Xe+0HmLFEqGKY7keac3ZzVI3ZzVDotMkDQnhii/LwpqdAtyKkdihicGJ4CcAgVkYYlDFJCWECsj3Eu4pISwgVke4lDFJC6ExWM3Eu4nwlhMVjN1IpIXIoWo8Nbtp7REOMeB5q5R204gEGJ0n6LOMcG0yS8XI7OscbWHiqzq5HXzhd7SOJSZq3bbezjcf5U7dsO7iMwbjqFm6uI3gIjumR4aplE7vvT5LN0aJs0x2u4OiYPA81352dCOfFZz8RfezPPhy5pWVWgh0HmpbXBVs0R28Z9r7+iczbr5iflPBBTVpg7kCLEccuOiWtXYWgwc4gHRK1wVb5D2H2zUdlPOeEwDPVKdrVBmDz45oE2qwibiBrnHEJae04gCDexgSZ4yi0K3yaJm3DIHH7urP5tY3WWqVxnv63AFs8x3q5hKxqg9kENsJnra90npRacn4QV/P5MDjqnnboOUrHsxxDiIFjl/lTvx4ky3tCxAM2MmUm48C1SNTS22dfjKut2raZWGp48bxsL2Oo5wjr8U2kwB1QdsRugy7Lk356qW1dFRbNHhdob4neHeeOSfUxzR7wOQtOokaLJtxDfVl1N2kxfxIi67AYibPqAiZ7yPEiwUSaTKTZtG1+Y8/olGJN4IWVdtRodG8HgWyMXi45dFbbXYCRutcToHGQOmfmiyg4/GuAJ+ahO1rTI/dUDiaRzaWnmCR8Sov4Ryqt4ZfIoTXsKfoI/m54p7drTmVSZs7WfIJn5XrvHwS7mPkejJwFWbU5qZu0jxQeng494+X1VPaFcsfu8RM/4QnF7A9SXk07donipBtE8UBwDC5u9OsWOcd9uitvgC+75/CVLaKV1YVGOJEymjE8yhrAXSG6CT0GqubNwO/m8Rw17kgtk7sWeKVtf+Y+KtjZjRaT4qF+ymz7RHglY/I1lcgxvFTMxh4qs/BAe+fA/EKOthHNDiLwJ1GQ6JWMvnH80120bgfNZT8WUlPE53VaWRqNa7H6b3noup43msi2vzUzMdok0x6kah+PJtJXLMUcROZPVcpaYtZjG4Smcwz76qxS2Qw+ywO6EfJNo4toMDEEH/mpmY3Eh3/8AQSNBLviWlZz6ifp/5Kjixr7Of6Nvd7LS3uMLv9I1TqO+ybhdu4sVN1xJBtJBkc/ZhFztGqQP4zBeTMZcLOCxn1OeDq0WseKXoEt9B6mtRo8fonf6LgR+IA49n91PhmFry9+Lc+b7rnjd6RNgiH5jTHv0/wC8fVRLrcyfh3+RpHpsbXlV+YHf6ONaADWnSRQLjnKov2G0ZVKjv/pgeb1p/wA1p/7lL+5v1SfmtP8A3afi1Jdbm/7/AOD+LiMuNjVbhoJ0u0DyJKnw+wq8AbjbSdfkFojtJufrW+ISfmbBnVHim+uzP0L4mLkBu2DipkMYLzmfoE78rx7fZLR3t+a1FBm9Bkxzm/QFSvotHvLJ/wCoz2dfoP4sFs2ef4n0exjnFzmyTmd5l46Hkqzth4lvuO4GL27l6IKZJtl0U7aPFX/FJr0iX0UX7Z5e7Z1YZtcNbg594U7vWZESQbZWPNemiiF3q+viU/4rzEn4P2eWeqfw+/knsfVA3d055r0yvV3RJuMumeqpV9x/uN5nX4LSP+pXvEh9G0vDMPhqrmntMc7lledfNFMO+nAcd5rxnE593JF6uBk9lrYIObifARChbslwGbR108lb6uEvdELDkj/SV2Y7eIAfUGnaYI77KYU2nOo058B+yquplpgAPbrDhN+ZKcWNMadTfxkBPvL0xan7RYpU4PZqxNrHlxClLX6VchoYPeVUOHaNP+xB/wD0ZT6eGHMf1Ao7/wBhrXH7kz61a/8AFH9ypPBcd5xJ45JtY7ps6QnUa05kjun4FaxyurIk7JBiXNFgY4yfqlZtBxIue4/Vcx06nwSOgZkd4VLKhF1uMdo4+JTm454953iR8kP9c3PeHikbjqVp3puDkfiM0ax2wqNp1P1u/uKcdp1Dm9/jqq+ExGEj+I+rvabpbumcr7stUD8XRGQqaC5abkjXdGk+CNRSsIU9qVBk5w8NO5Tjbtf/AHH+X0QOvW3ahgksgRIvcSZA1zv0T31nAxuZicjYcfv90ag8l415uR5BL60cPL91CxhNIvaZgmZabAayJnVdgyT7RmbDS83z6Ic6Vjpk4qD9Pkfqu3m/pPn9U2bx+6UEIUxMkD2/pKROp4kjh5LlWv6JtHnrnODoa3SZ071fp4utN3NFr2krUfkdD9PiSfinN2NRGTY715D66HB2Y8CgvDALMWTANx3we5I6uP8Ab/6/stF+U0+fiU12yKf83iVl8uPBro/5P9jOGqNGx/SVJSa957AJ6ArQ0tmUm6eN++4VtrIyMdAPok+sXpEuD5/wZoYCvwJPCY+cK1Q2TVPtQP8At8I+JRp7SfeI6RfrK7dOW8Y/p7lEurkwUOSh+BGRPmAn0cC1hke1oTuk90qy1rst8/fenta/9Q7wf/ayzeV8mlrgdvPzl3g1dJN5J8FzWu1d4NI/8im+qf8Ar7t0Qsr+x6yYF32AnBz/ALAVdpI4HjH7TCX1saQes9/FS2VrZZFR3H4JtTE7t3PAHOFQxFapHvOzswNGXEkye5CcW+r7lJw5kEnxWsMerdkOcm6igti9osLbOtnPZA5TJBzQk7eYP0f3iPGELq0Kubg7vB/wqdWiu3HixrwwrLW/7B07fGVh3TPQzfuSVMeKgAl4PIEA9c1mTQIyJHw7xkVwmMmnmCWHvi3kulYcfo5cnffhuzSfiIEGm6xzzHcJHgp6VVhEkEDm23jKzDMSRmHZAWdPxKs0y8iZeBmJAPfYmybxcM5ncd0HajGusKkcItnzVY7NcDmOqGuqEe8CM5Gs9OHRS4bEfzgcAQ4fEwhKSXhk6ibFPdTgTIPx6LqFSc3d2qi9XvmDc8d2B5JRhzkALT7r/mFqmq87grexO6oOC6oBE/VQvDmmCLxPjkm76a+hCuAUJYOaf66NU9j5+HFbKTQWRsfHHvFvu6mZWBMkg9XAXzuCPNWm4dws6m4H/g4GOMRkmOY2YLb8DY+BCNfKKUqJX41+5ugUzqT2CfNStoyA45kTmADH+PMKmcO0cldwezajm77ab3NALgd20ZGDkTpGZQ/opTLNPAvIs20XbNjIuM4hSjCvLmgMdpaPek5cfFaLZ3orVDQTVDcuyATAJBOdgYtktPhsCxkWkjU3KNLZdqjIU9hYkmDSjnvtA8ij+z9iVGmalWRAlsFwtpJ0RwJVSxRRFsofk9O/ZF/lw4LkQXK9KDUzyGrDuyHVGm12ktm/MR5juVnC4d0dp9Scz/EJ+CEfjq7BJNMxoQ6ek/BJT9IKtpZTd0dun5wvAljm1UTojlh7DpYYtvE83QOcWP2Vwou/WR3tPxYEK/1ER7VA9z2lOZ6TU/eZUb1aD8DKweLN/tNVkxv2FvUn9bvBvDkEhpO/X/1+hCqUdvUXXDxGd2uA7iRCR+3qQJG9P/EEjyCxay3VfsXcPRdLHfqHe0/+y6H8Wn+lw+ZQqpt8e5Se7u3R5qpiNuYg2ZSa06EvuO4WVRw5H6/Wh/2TD76jm3O7H/KPiF1PEE5stxn5EArHUNo4lpl3q3G9yTN9AYsFJU2/iG6Uv+08lt8WWyoV8pmvdV1sBrr5pvrJ4nmcuVv8IH6P4p1dhqVC0ua4gAZNgC8cc7o2HLCcND0vc1hFNWSxxPKBYJd3lCr7xnLyUm+eHxCzs0pEhd9n9k3f6eaZ6z73lxf18vFFgTGr9g/slEHNQmp18Fzqg4+SLAe+i05gHuB+IUL9nUjc02f2D4wnb+lpXB/3KpSa9gQnZFD/AGm+EDhkozsTD2/h+DnD4FW/WWzUTq4mJGUnlzPBaLJk5ZLhB7opVdg0I9kgZ+2489UIq4CCQ13ZBsC4SATYHiURx2M3+wwGNefWMhyQqrgqjbNmNIMxy6LvwuaX4pfqebn0N1BC16LWZ3NjYuP34J/rn2gudOUbxNjkAOhUNKqWksgioBF4Mk6QNVa/JcY4tsSLEkODC085Mu6iV2Y4OW5zJhbA+jNWq0PfU3MoaWgkt0Mh1rI/Q9FMKPaYXnOXOM/9YCm2OaopNFa7xYmc4yPgiLKi6lFLY2ikdhtnUWWbSYP6RortNrRkAOgAVQ1wIkgSYEnM8ApmvQaItBDNqbGbXq03vuGSIk6gwR3keCvB6e1yYPyVNs7IZXp7lgbDe3RMAzuzmB0VrZGCFGm1s3AAMExYRIGkxPepA5PDkCosBycCq4cnByqyWiwClUIcnBydk0SyuTJXJio8PNKmY7LYiIc4k5k3bPPipcIyjNmMJ/SKYJ8STxQjC7RY8Ebjd4DL1YIjUuKmO0HCw3Y4iwjXK5XiuMtiU/YaOHpjRrdY7LfhCr1qYe4HcADZkzxi1zcGFQZjaW7dzd0ZzLu7MpaFYPG8HNDAY7LZgaS1w/wpUWndjb8eC+7Atc2wG80EtGe9qRfXXPiqrX2tkeGn7K/haoYJglrgbtBGeoaJuocRhyGCoCXH3pbulw4kfqGsZ5rK/Pk7elzJfhZX3z9fr0yXNqE21+8lGHC0ZaHhxCcSPvQ/RM9AiqiZVOtR70R3pMOidDxTXU+P398FcZ0Q42CMJXq4Z5ewBzT7TTkeY4FHMN6XUTaoHU3cxI8r+SrupieXH7yVbE4QOGQkZiPgnJY8n86/My7c4/yv8g2PSbDf7g/td9E//U9D9ZPQFZR9JhA7ID2jdIgXAHtN48wogBp9EfDxPk4p9Xki6aRrKvpVTF2h7lVd6WHIUO/fH0QANPVO3T9lUukxL0Zvq8rDDvSWrmKbY5n6KKp6QYg5CmO4/VDgE+B9wrWDGv6SH1GV+y0dtYk++0dGqF+OruzrGOVlDHNRvq/cLRY4+kv0M3mm95MUvqTarVJ4b0qXEVarQ1oqP3o7UGQMiB1zT20i0Nc0S5wlv8tyLg62KnwWyJvVt/KDM9+nctseN5H4XgWqXIzA+vJ7DZPGIF7zIICL0MHiX2futEwYcZI4xcQrmDptpt3WCBnHMq6youtdLD3uLULs3ZVKk7eEl3EmfjkeiMsrIYyopW1VroS2KUgq2qrDKqEMqKZlZQ4mikFN4FStqIbTqqcVFNFphBtRSB6HNqqYVEqKsvB6eHqgKqz22PTOlSO7Tio8GDeGj+oZpCcktzZiomNxjJjfbPDeEryHa/pDWxBBc7cH6Wlwb1InO6GOfHf96qXKjN5eEe6HG0xm9o/qH1UTts4cZ16Y/rb9V4cahH3CQVO5LWxdz6Pcjt3DwT6+lb/5G/VcvDTVjNwHUj4FIjuC7j4JtkVD6tzoAABaWxPLqq9JoFxug6jtWBsR9hUMPVqUnauBNwW280QwtcPJYQaZ/S4QSI0LjebLhknFtkJ3SKZY0HynSYgACJU2CxIZcnsg3aN6ZF9bW5pcXU3Q5h5axBHTw7lFRIALhmIJBMyOJn5c1T8ryKqZoW49u6CKjxIkdpu6I0IMwfqn/jHOYdwgOOUke0LjS3DnKA1scXyWloOUAQSNIU+GxjxI3Q50WBBJAm0iSsHjVW9y1KmWd4Z7sAwHAe48i7Y+GSdvcM/ipfUOe8OLdwxuuvvNeLG4JkddFBiGBhgODmzGktOe6/modX4PT6fqFJaXuOa4a5ajUdE8vyDstCq865RreErak2Njw07kmjqslqHTQ+f7qPe4m+h+RCUOgRcicsj1CZvAmBflr+/cmkFkdeiCQR2XaHny4Kqa0HdeA0/qtunhvD3TzyVsCx1H3H3omPYHCDPfmPqtYyo582GM/wC5A45G0EWOcjjbNMfUKiDTTNhLdWzAPMfpK41mEgXE2AIvOgnI+S3R5mTFKBIH/crgUlUhtie7koBVccvMj46JLyc9kz3nIFTYTcDSXbpfPZaZg8SbwQPioMTU9WYBDnQQYJ3YcN2ARHTv8KNPBvMZdZ48VrGHcVRHdGnoPntkyTrNoGQHBXKdRZvB4JzTPrI6eeaMMqL08MdMdNUJuwmyqreGrUy0ve/cDbHeIBJvBbf2TxPNBmvVXB7PptJc5gLt4uBMui9j2sijLCUlUXReOUU7krNDhsSHDeaZaSd0xEt0P7656wrjKqEMrKdldUo0qE3bCzKinZUQhuIUzcQpcRphdtRSNqoS3EKZuIUOJSkFW1lKKyFtrKRtVTpLUgn6wEQbhYf0g9FXhzqtDtgkuNOzSOO7oelj1WpbWT/XJUDp7nl1V5pu3arXMPB8gxykJvrjpHUcl6jW3Xjde0OHBwBHgVnNq+iFKpeiRTdeQQXNPiez3LN4kQ48GLNaP2SMeTcD5I3i/RQ0G+sqVN5u80Q0GTvGJvz4IptDDU6WGqbu6XB0MENc7ec0CLjmbDhzR26BLkyuGr0wd7ecHA27QaIIjPU5rkHxBImREZggiOo0KRZPCnuNSNRUpndndkC8zIjhdDcYSe3eGxlb4ZlUadyA6vA5jygInTpmkC8O32iJnIh3ECRaYC5HcfHsySRXrVw7tT2gLyAH2tczewTamJ7IgyDYhwmDyI0+gT6VIQSHC5JIOTbjMxl9VUdRcSAQADcXBvyEqlQ7LWAYx0kNALbgi567s3ROh2yXOgTZ0dmeExcC4F0DpmozfYR2fetGsTaDyzVmq8ANFFxafeAO9M/pP1UTi29yk/Aaw1SBuuGRGbo6FjtRCm/CNc81GCd4Q9u+JMCxzuRxVLFPLQzMtgDOL84+8kVpxUEF4DgJEPg98rCUvFmkZtMF1KBYYdYG7ToRxE2UNRpBvGeYy43GhRev2gGerJbO8exJ3iI3pAjQGRCHNECPabcazBjMckRkz0ceVS8PcY15yPSPmCm1DF8wDYhRVAJ3QZ/SemXQpd8xfp4216LSjSyX1umv3dKZJyue7559VXA8PLPn8lD+aMEw4ki2UeZ8UaG9iJZoR3ZarMk/fjKq1aUmIF8psO7ioMRtckWAByuIIInXw8UOxOJc53bBPw5R46LfHikcmXq0/ES7+MptgNbvG9iZAvoJiM1TdjHajPSIsdIi/wAk1uZjLK4G9kNdFM0rux9LycEpW7GYQmZ3TexnKMkWp1FQa9StqLqx4lDYmwi2qpW1ENbUUraq1AItqqQVkMFZO9ekAUFZSCuhQrp4rIGFW4hStxCEtrKVtZABhmIU7MQgra6lZXSoYdp4hWG10CZXVhldS4lJhj1ySliw4S0gjkZWH9JdqGQ1j3tI9oCQOIIIWfbWcLhxniDB62WcmkLWeo43bNOkQKhjey4W55BDavpiwTutm9iTY+F5WDq4t7wA57jHEk+ShEaLNzRWphPbe2XVqhcCQ23ZLiQCBmOCHDGPGRyVeoRxVd5U3YrLVfFvcXFx9vPxmw0uuVaAdVyCrCxwzajpDg05gOn5BX8PRq0hG5v70yR2raW4c1XqYUPEyekQe6+SsYZxbTIc5xbn/MP+M2K86TtGaG0XtmH0wORLr55g6n5plfMPayDfKB2QbSYy+ivV8PRrNbu1d4gWJIa8cnAm4vmh9TDVKJO+JaOyY+YOQTg4y/vwVpY0bQc2WuFiNRvZ6zn3q7g/Vlu8IE+1BgzFj8lT9cwsJAcZ5AgLsEae8XFxBtkIEgRJJlTOCrx4GmEW4jcBF3Re17aXH3ZD91jiT284IF7c11UOJ7D4F+Z77Qm4fDkntVNZjiesJRgoq7B+SzhSwVGkOex2k6HnqMlZp1hLiRv6zuwb+0THvc5QrF1AJN97KZvGWvJV6+McQJNgLEZ24EXn6K+3qGpaQgNosBiHDlPxsmV9pC8AC/WOtrITUqkwSYvncSTonOqgZXdq7TpxOi2j09sbzzfsldVkk3uLmwMXEHzVdzj+1lGXpN9dsOnS3MmyZzyTJP311S7yg3koct4wjHZCJw5ODlX3k6VQiy1ykDlVa5O30BRaD0oeqocnh6YFkVEu+qwel3kCLQqJ7aiqByka9Ay6yopm1FQFRPFRAwgKilY9DQ9SsqoAK06inbVQplVStrIAqekeFc7+I2DuiCMjHHms612l55rXmogO18HHaa2BrcR4LLJC/IFYGVG56bTfH0+ildfLP5LjfhlIgJnko+nkpHtTRPHvRYDGuvkkUknl4LlVjsL1s/vimsed0XOnxSLl55I3GiN0ixvcWKPPM06RNzuxJuYlcuSyf0mkdmV8W0NpuLRHZGVtRwQ+o0CY5fArlyMexLG1HG3X5hQYlxGRi2ltUi5ax3KexDWPaPd8Ujc+4/8AkkXLaOxkQk9lvf8AFMSLl34v5QZxXLly1EKlSLkAKE8LlyAFCVKuQA5cEi5ADwnNXLkAPCcFy5MBzVI1cuQIkCe1cuQMlanhcuQMeCoMeP4buiVchiMlTNgeSI0dFy5cM9iiUeyOhUTPa++CRcsojEd7vQpVy5DA/9k="
							alt="
						Porsche và Subaru có dịch vụ khách hàng tốt nhất">
						<div class="post-item__content">
							<h3 class="post-item__title">Porsche và Subaru có dịch vụ khách hàng tốt nhất</h3>
							<div class="post-item__info">
								<div class="post-item__meta">
									<div class="post-item__category">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
												stroke="white" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>
											Xe hay
										</span>
									</div>
									<div class="post-item__date">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
												stroke="white" stroke-miterlimit="10" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
										<span>16/03/2025</span>
									</div>
								</div>
								<button class="post-item__button">Xem ngay</button>
							</div>
						</div>
					</a>

					<!-- Blog Item -->
					<div class="blog-item">
						<div class="row">
							<div class="col-4">
								<div class="blog-item__content">
									<div class="blog-item__info">
										<a href="" class="blog-item__title line-2">
											<h3 class="line-2"> Báo chí đưa tin về sự kiện ký kết Biên bản dax them
												line-2
											</h3>
										</a>
										<div class="blog-item__meta">
											<div class="blog-item__category">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path d="M13.6668 11.1H10.3335" stroke="#354764"
														stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path
														d="M15.2134 5.33331H8.78671C7.36671 5.33331 6.21338 6.49331 6.21338 7.90665V17.3C6.21338 18.5 7.07338 19.0066 8.12671 18.4266L11.38 16.62C11.7267 16.4266 12.2867 16.4266 12.6267 16.62L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.3V7.90665C17.7867 6.49331 16.6334 5.33331 15.2134 5.33331Z"
														stroke="#354764" stroke-linecap="round"
														stroke-linejoin="round" />
												</svg>
												<span>
													Xe hay
												</span>
											</div>
											<div class="blog-item__date">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path d="M9.3335 5.33331V7.33331" stroke="#354764"
														stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M14.6665 5.33331V7.33331" stroke="#354764"
														stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M6.3335 10.06H17.6668" stroke="#354764"
														stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path
														d="M18 9.66665V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66665C6 7.66665 7 6.33331 9.33333 6.33331H14.6667C17 6.33331 18 7.66665 18 9.66665Z"
														stroke="#354764" stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M14.463 13.1333H14.469" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M14.463 15.1333H14.469" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M11.9972 13.1333H12.0031" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M11.9972 15.1333H12.0031" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M9.52938 13.1333H9.53537" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M9.52938 15.1333H9.53537" stroke="#354764"
														stroke-linecap="round" stroke-linejoin="round" />
												</svg>
												<span>16/03/2025</span>
											</div>
										</div>
									</div>
									<p class="blog-item__desc">
										Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
										when
										an unknown printer took a galley of type
									</p>
									<div class="">
										<a href="#" class="blog-item__button">Xem ngay</a>
									</div>
								</div>
							</div>
							<div class="col-8">
								<a href="#" class="blog-item__image">
									<img src="data:image/jpeg;base64,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"
										alt="Báo chí đưa tin về sự kiện ký kết Biên bản">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<h2 class="related-news__subtitle"> <?php _e("Tin liên quan"); ?></h2>
				<div class="related-news__inner">
					<?php for ($i = 0; $i < 4; $i++): ?>
						<a href="#" class="related-news">
							<img class="related-news__image"
								src="data:image/jpeg;base64,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"
								alt="
						Porsche và Subaru có dịch vụ khách hàng tốt nhất">
							<div class="related-news__content">
								<h3 class="related-news__title">Porsche và Subaru có dịch vụ khách hàng tốt nhất</h3>
								<div class="related-news__info">
									<div class="related-news__meta">
										<div class="related-news__category">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
													stroke-linecap="round" stroke-linejoin="round" />
												<path
													d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
													stroke="white" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>
												Xe hay
											</span>
										</div>
										<div class="related-news__date">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
													stroke-linecap="round" stroke-linejoin="round" />
												<path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
													stroke-linecap="round" stroke-linejoin="round" />
												<path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
													stroke-linecap="round" stroke-linejoin="round" />
												<path
													d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
													stroke="white" stroke-miterlimit="10" stroke-linecap="round"
													stroke-linejoin="round" />
												<path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
													stroke-linejoin="round" />
												<path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
													stroke-linejoin="round" />
												<path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
													stroke-linejoin="round" />
												<path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
													stroke-linejoin="round" />
												<path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
													stroke-linejoin="round" />
												<path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
											<span>16/03/2025</span>
										</div>
									</div>
								</div>
							</div>
						</a>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!--  -->
<div class="secSpace">
	<div class="container">
		<h2 class="highlight-news__title">
			<?php _e("Tin Nổi bật"); ?>
		</h2>
		<div class="row">
			<?php for ($i = 0; $i < 3; $i++): ?>
				<div class="col-lg-4">
					<a href="#" class="highlight-news-item">
						<img class="highlight-news-item__image"
							src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSEhMWFhUXFxcVFhcYFhcXFxgWFRUYFhYVFRgYHSggGBolHRYVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGzIlHyUtLS0tLS0vLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKIBNwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAFAQIDBAYAB//EAEAQAAEDAgMFBAgEBQQCAwEAAAEAAhEDIQQxQQUSUWFxIoGRoQYTMkKxwdHwFBVS4SNigpLxFlNyosLSY4OyNP/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EAC8RAAICAQMEAgAEBQUAAAAAAAABAhEDEjFRBBMhQRRhIoGRoRUyQnGxBVJi8PH/2gAMAwEAAhEDEQA/AAv4Nd+DR44VcMKuzumfbAf4RKMIjowqcMLyR3R9oBDCJ4waOfhOScMLyS7odoCDBJ4wSNjDptYsZ7RA6/IJd1sfaXsEjBBOGB5K7Rx1E23o6iEQpUmkS2COV0ObW4LGnsBDs6dFFU2SOC0owo4JwwoU95ldhGOds0jQpPwD+BW0GFCcMIOCr5BPxjE/g3cCntwzhoVthhBwSjBjgj5P0HxfsxgY9P3Ccx5LY/lzeHwXDZjeCXyEHx2ZWkzi3yVunSYdIWhGyWpw2S1J5kylgkgCMAw6BS09lt0COt2W1SDZ5GRUPN9lrD9AVuBHBSNwKNU8GdVM3CKXlLWJAMYFPbgOSOjCp4wqnuj7aAY2fyThgOSOtwyeKCXcY+2gEMCnDBckeGH5JRh+SO4w7aAYwaeMIjYw6d6hLWPQgIMGnDBo16hKKCNYtKAwwae3CIx6hKKKNYaUCRhE8YVFRRTvUo1DpAoYZIi/qVyNQqPM24sfoPknDEt/S7wH1RyngmxopBgW8At24mKjICOqMAmZ5AXTW12zk4c4+iOjAt4BccC3gFNxHUgN65n6vI/RVMRtCLMYTzNh4ZrR/l7eAXDAtPBCcUDUmYqtWrOmXEDgLfuq7cCeC3w2c3gE78ubwC17yWyM3hb3ZghgDwU1DDvYZaSDyW5Gz28AlGAbwCTzAsFGWZtCsBG60niQfkVz8dXOQDeg+srV/l7eAThs9vAKNceDTRPkx7sTXIjePcAPMBR0jWGT38cyfitqcA3klGzm8An3FwLtPky7cfW5H+n6JaePrAmYPIty6RC0/wCWs4BKNmN4KdUeCtEuTK1sXXcfa3eTRHxukGJxER6w+AnxiVrhs1vBcNms5I1rgWiXJj2CrM+sfI/mP1U2HqVmneD3c5JI8CtYNmM5Jw2Y1JzQLG+QPR2q/wB5gPSR9VM7a1rU76SbImNmNS/ljVH4TT8XJn342ucnR0aPndLQr1m++T1g/FaIbManDZrUalwFfYOwu0Xe+0HmLFEqGKY7keac3ZzVI3ZzVDotMkDQnhii/LwpqdAtyKkdihicGJ4CcAgVkYYlDFJCWECsj3Eu4pISwgVke4lDFJC6ExWM3Eu4nwlhMVjN1IpIXIoWo8Nbtp7REOMeB5q5R204gEGJ0n6LOMcG0yS8XI7OscbWHiqzq5HXzhd7SOJSZq3bbezjcf5U7dsO7iMwbjqFm6uI3gIjumR4aplE7vvT5LN0aJs0x2u4OiYPA81352dCOfFZz8RfezPPhy5pWVWgh0HmpbXBVs0R28Z9r7+iczbr5iflPBBTVpg7kCLEccuOiWtXYWgwc4gHRK1wVb5D2H2zUdlPOeEwDPVKdrVBmDz45oE2qwibiBrnHEJae04gCDexgSZ4yi0K3yaJm3DIHH7urP5tY3WWqVxnv63AFs8x3q5hKxqg9kENsJnra90npRacn4QV/P5MDjqnnboOUrHsxxDiIFjl/lTvx4ky3tCxAM2MmUm48C1SNTS22dfjKut2raZWGp48bxsL2Oo5wjr8U2kwB1QdsRugy7Lk356qW1dFRbNHhdob4neHeeOSfUxzR7wOQtOokaLJtxDfVl1N2kxfxIi67AYibPqAiZ7yPEiwUSaTKTZtG1+Y8/olGJN4IWVdtRodG8HgWyMXi45dFbbXYCRutcToHGQOmfmiyg4/GuAJ+ahO1rTI/dUDiaRzaWnmCR8Sov4Ryqt4ZfIoTXsKfoI/m54p7drTmVSZs7WfIJn5XrvHwS7mPkejJwFWbU5qZu0jxQeng494+X1VPaFcsfu8RM/4QnF7A9SXk07donipBtE8UBwDC5u9OsWOcd9uitvgC+75/CVLaKV1YVGOJEymjE8yhrAXSG6CT0GqubNwO/m8Rw17kgtk7sWeKVtf+Y+KtjZjRaT4qF+ymz7RHglY/I1lcgxvFTMxh4qs/BAe+fA/EKOthHNDiLwJ1GQ6JWMvnH80120bgfNZT8WUlPE53VaWRqNa7H6b3noup43msi2vzUzMdok0x6kah+PJtJXLMUcROZPVcpaYtZjG4Smcwz76qxS2Qw+ywO6EfJNo4toMDEEH/mpmY3Eh3/8AQSNBLviWlZz6ifp/5Kjixr7Of6Nvd7LS3uMLv9I1TqO+ybhdu4sVN1xJBtJBkc/ZhFztGqQP4zBeTMZcLOCxn1OeDq0WseKXoEt9B6mtRo8fonf6LgR+IA49n91PhmFry9+Lc+b7rnjd6RNgiH5jTHv0/wC8fVRLrcyfh3+RpHpsbXlV+YHf6ONaADWnSRQLjnKov2G0ZVKjv/pgeb1p/wA1p/7lL+5v1SfmtP8A3afi1Jdbm/7/AOD+LiMuNjVbhoJ0u0DyJKnw+wq8AbjbSdfkFojtJufrW+ISfmbBnVHim+uzP0L4mLkBu2DipkMYLzmfoE78rx7fZLR3t+a1FBm9Bkxzm/QFSvotHvLJ/wCoz2dfoP4sFs2ef4n0exjnFzmyTmd5l46Hkqzth4lvuO4GL27l6IKZJtl0U7aPFX/FJr0iX0UX7Z5e7Z1YZtcNbg594U7vWZESQbZWPNemiiF3q+viU/4rzEn4P2eWeqfw+/knsfVA3d055r0yvV3RJuMumeqpV9x/uN5nX4LSP+pXvEh9G0vDMPhqrmntMc7lledfNFMO+nAcd5rxnE593JF6uBk9lrYIObifARChbslwGbR108lb6uEvdELDkj/SV2Y7eIAfUGnaYI77KYU2nOo058B+yquplpgAPbrDhN+ZKcWNMadTfxkBPvL0xan7RYpU4PZqxNrHlxClLX6VchoYPeVUOHaNP+xB/wD0ZT6eGHMf1Ao7/wBhrXH7kz61a/8AFH9ypPBcd5xJ45JtY7ps6QnUa05kjun4FaxyurIk7JBiXNFgY4yfqlZtBxIue4/Vcx06nwSOgZkd4VLKhF1uMdo4+JTm454953iR8kP9c3PeHikbjqVp3puDkfiM0ax2wqNp1P1u/uKcdp1Dm9/jqq+ExGEj+I+rvabpbumcr7stUD8XRGQqaC5abkjXdGk+CNRSsIU9qVBk5w8NO5Tjbtf/AHH+X0QOvW3ahgksgRIvcSZA1zv0T31nAxuZicjYcfv90ag8l415uR5BL60cPL91CxhNIvaZgmZabAayJnVdgyT7RmbDS83z6Ic6Vjpk4qD9Pkfqu3m/pPn9U2bx+6UEIUxMkD2/pKROp4kjh5LlWv6JtHnrnODoa3SZ071fp4utN3NFr2krUfkdD9PiSfinN2NRGTY715D66HB2Y8CgvDALMWTANx3we5I6uP8Ab/6/stF+U0+fiU12yKf83iVl8uPBro/5P9jOGqNGx/SVJSa957AJ6ArQ0tmUm6eN++4VtrIyMdAPok+sXpEuD5/wZoYCvwJPCY+cK1Q2TVPtQP8At8I+JRp7SfeI6RfrK7dOW8Y/p7lEurkwUOSh+BGRPmAn0cC1hke1oTuk90qy1rst8/fenta/9Q7wf/ayzeV8mlrgdvPzl3g1dJN5J8FzWu1d4NI/8im+qf8Ar7t0Qsr+x6yYF32AnBz/ALAVdpI4HjH7TCX1saQes9/FS2VrZZFR3H4JtTE7t3PAHOFQxFapHvOzswNGXEkye5CcW+r7lJw5kEnxWsMerdkOcm6igti9osLbOtnPZA5TJBzQk7eYP0f3iPGELq0Kubg7vB/wqdWiu3HixrwwrLW/7B07fGVh3TPQzfuSVMeKgAl4PIEA9c1mTQIyJHw7xkVwmMmnmCWHvi3kulYcfo5cnffhuzSfiIEGm6xzzHcJHgp6VVhEkEDm23jKzDMSRmHZAWdPxKs0y8iZeBmJAPfYmybxcM5ncd0HajGusKkcItnzVY7NcDmOqGuqEe8CM5Gs9OHRS4bEfzgcAQ4fEwhKSXhk6ibFPdTgTIPx6LqFSc3d2qi9XvmDc8d2B5JRhzkALT7r/mFqmq87grexO6oOC6oBE/VQvDmmCLxPjkm76a+hCuAUJYOaf66NU9j5+HFbKTQWRsfHHvFvu6mZWBMkg9XAXzuCPNWm4dws6m4H/g4GOMRkmOY2YLb8DY+BCNfKKUqJX41+5ugUzqT2CfNStoyA45kTmADH+PMKmcO0cldwezajm77ab3NALgd20ZGDkTpGZQ/opTLNPAvIs20XbNjIuM4hSjCvLmgMdpaPek5cfFaLZ3orVDQTVDcuyATAJBOdgYtktPhsCxkWkjU3KNLZdqjIU9hYkmDSjnvtA8ij+z9iVGmalWRAlsFwtpJ0RwJVSxRRFsofk9O/ZF/lw4LkQXK9KDUzyGrDuyHVGm12ktm/MR5juVnC4d0dp9Scz/EJ+CEfjq7BJNMxoQ6ek/BJT9IKtpZTd0dun5wvAljm1UTojlh7DpYYtvE83QOcWP2Vwou/WR3tPxYEK/1ER7VA9z2lOZ6TU/eZUb1aD8DKweLN/tNVkxv2FvUn9bvBvDkEhpO/X/1+hCqUdvUXXDxGd2uA7iRCR+3qQJG9P/EEjyCxay3VfsXcPRdLHfqHe0/+y6H8Wn+lw+ZQqpt8e5Se7u3R5qpiNuYg2ZSa06EvuO4WVRw5H6/Wh/2TD76jm3O7H/KPiF1PEE5stxn5EArHUNo4lpl3q3G9yTN9AYsFJU2/iG6Uv+08lt8WWyoV8pmvdV1sBrr5pvrJ4nmcuVv8IH6P4p1dhqVC0ua4gAZNgC8cc7o2HLCcND0vc1hFNWSxxPKBYJd3lCr7xnLyUm+eHxCzs0pEhd9n9k3f6eaZ6z73lxf18vFFgTGr9g/slEHNQmp18Fzqg4+SLAe+i05gHuB+IUL9nUjc02f2D4wnb+lpXB/3KpSa9gQnZFD/AGm+EDhkozsTD2/h+DnD4FW/WWzUTq4mJGUnlzPBaLJk5ZLhB7opVdg0I9kgZ+2489UIq4CCQ13ZBsC4SATYHiURx2M3+wwGNefWMhyQqrgqjbNmNIMxy6LvwuaX4pfqebn0N1BC16LWZ3NjYuP34J/rn2gudOUbxNjkAOhUNKqWksgioBF4Mk6QNVa/JcY4tsSLEkODC085Mu6iV2Y4OW5zJhbA+jNWq0PfU3MoaWgkt0Mh1rI/Q9FMKPaYXnOXOM/9YCm2OaopNFa7xYmc4yPgiLKi6lFLY2ikdhtnUWWbSYP6RortNrRkAOgAVQ1wIkgSYEnM8ApmvQaItBDNqbGbXq03vuGSIk6gwR3keCvB6e1yYPyVNs7IZXp7lgbDe3RMAzuzmB0VrZGCFGm1s3AAMExYRIGkxPepA5PDkCosBycCq4cnByqyWiwClUIcnBydk0SyuTJXJio8PNKmY7LYiIc4k5k3bPPipcIyjNmMJ/SKYJ8STxQjC7RY8Ebjd4DL1YIjUuKmO0HCw3Y4iwjXK5XiuMtiU/YaOHpjRrdY7LfhCr1qYe4HcADZkzxi1zcGFQZjaW7dzd0ZzLu7MpaFYPG8HNDAY7LZgaS1w/wpUWndjb8eC+7Atc2wG80EtGe9qRfXXPiqrX2tkeGn7K/haoYJglrgbtBGeoaJuocRhyGCoCXH3pbulw4kfqGsZ5rK/Pk7elzJfhZX3z9fr0yXNqE21+8lGHC0ZaHhxCcSPvQ/RM9AiqiZVOtR70R3pMOidDxTXU+P398FcZ0Q42CMJXq4Z5ewBzT7TTkeY4FHMN6XUTaoHU3cxI8r+SrupieXH7yVbE4QOGQkZiPgnJY8n86/My7c4/yv8g2PSbDf7g/td9E//U9D9ZPQFZR9JhA7ID2jdIgXAHtN48wogBp9EfDxPk4p9Xki6aRrKvpVTF2h7lVd6WHIUO/fH0QANPVO3T9lUukxL0Zvq8rDDvSWrmKbY5n6KKp6QYg5CmO4/VDgE+B9wrWDGv6SH1GV+y0dtYk++0dGqF+OruzrGOVlDHNRvq/cLRY4+kv0M3mm95MUvqTarVJ4b0qXEVarQ1oqP3o7UGQMiB1zT20i0Nc0S5wlv8tyLg62KnwWyJvVt/KDM9+nctseN5H4XgWqXIzA+vJ7DZPGIF7zIICL0MHiX2futEwYcZI4xcQrmDptpt3WCBnHMq6youtdLD3uLULs3ZVKk7eEl3EmfjkeiMsrIYyopW1VroS2KUgq2qrDKqEMqKZlZQ4mikFN4FStqIbTqqcVFNFphBtRSB6HNqqYVEqKsvB6eHqgKqz22PTOlSO7Tio8GDeGj+oZpCcktzZiomNxjJjfbPDeEryHa/pDWxBBc7cH6Wlwb1InO6GOfHf96qXKjN5eEe6HG0xm9o/qH1UTts4cZ16Y/rb9V4cahH3CQVO5LWxdz6Pcjt3DwT6+lb/5G/VcvDTVjNwHUj4FIjuC7j4JtkVD6tzoAABaWxPLqq9JoFxug6jtWBsR9hUMPVqUnauBNwW280QwtcPJYQaZ/S4QSI0LjebLhknFtkJ3SKZY0HynSYgACJU2CxIZcnsg3aN6ZF9bW5pcXU3Q5h5axBHTw7lFRIALhmIJBMyOJn5c1T8ryKqZoW49u6CKjxIkdpu6I0IMwfqn/jHOYdwgOOUke0LjS3DnKA1scXyWloOUAQSNIU+GxjxI3Q50WBBJAm0iSsHjVW9y1KmWd4Z7sAwHAe48i7Y+GSdvcM/ipfUOe8OLdwxuuvvNeLG4JkddFBiGBhgODmzGktOe6/modX4PT6fqFJaXuOa4a5ajUdE8vyDstCq865RreErak2Njw07kmjqslqHTQ+f7qPe4m+h+RCUOgRcicsj1CZvAmBflr+/cmkFkdeiCQR2XaHny4Kqa0HdeA0/qtunhvD3TzyVsCx1H3H3omPYHCDPfmPqtYyo582GM/wC5A45G0EWOcjjbNMfUKiDTTNhLdWzAPMfpK41mEgXE2AIvOgnI+S3R5mTFKBIH/crgUlUhtie7koBVccvMj46JLyc9kz3nIFTYTcDSXbpfPZaZg8SbwQPioMTU9WYBDnQQYJ3YcN2ARHTv8KNPBvMZdZ48VrGHcVRHdGnoPntkyTrNoGQHBXKdRZvB4JzTPrI6eeaMMqL08MdMdNUJuwmyqreGrUy0ve/cDbHeIBJvBbf2TxPNBmvVXB7PptJc5gLt4uBMui9j2sijLCUlUXReOUU7krNDhsSHDeaZaSd0xEt0P7656wrjKqEMrKdldUo0qE3bCzKinZUQhuIUzcQpcRphdtRSNqoS3EKZuIUOJSkFW1lKKyFtrKRtVTpLUgn6wEQbhYf0g9FXhzqtDtgkuNOzSOO7oelj1WpbWT/XJUDp7nl1V5pu3arXMPB8gxykJvrjpHUcl6jW3Xjde0OHBwBHgVnNq+iFKpeiRTdeQQXNPiez3LN4kQ48GLNaP2SMeTcD5I3i/RQ0G+sqVN5u80Q0GTvGJvz4IptDDU6WGqbu6XB0MENc7ec0CLjmbDhzR26BLkyuGr0wd7ecHA27QaIIjPU5rkHxBImREZggiOo0KRZPCnuNSNRUpndndkC8zIjhdDcYSe3eGxlb4ZlUadyA6vA5jygInTpmkC8O32iJnIh3ECRaYC5HcfHsySRXrVw7tT2gLyAH2tczewTamJ7IgyDYhwmDyI0+gT6VIQSHC5JIOTbjMxl9VUdRcSAQADcXBvyEqlQ7LWAYx0kNALbgi567s3ROh2yXOgTZ0dmeExcC4F0DpmozfYR2fetGsTaDyzVmq8ANFFxafeAO9M/pP1UTi29yk/Aaw1SBuuGRGbo6FjtRCm/CNc81GCd4Q9u+JMCxzuRxVLFPLQzMtgDOL84+8kVpxUEF4DgJEPg98rCUvFmkZtMF1KBYYdYG7ToRxE2UNRpBvGeYy43GhRev2gGerJbO8exJ3iI3pAjQGRCHNECPabcazBjMckRkz0ceVS8PcY15yPSPmCm1DF8wDYhRVAJ3QZ/SemXQpd8xfp4216LSjSyX1umv3dKZJyue7559VXA8PLPn8lD+aMEw4ki2UeZ8UaG9iJZoR3ZarMk/fjKq1aUmIF8psO7ioMRtckWAByuIIInXw8UOxOJc53bBPw5R46LfHikcmXq0/ES7+MptgNbvG9iZAvoJiM1TdjHajPSIsdIi/wAk1uZjLK4G9kNdFM0rux9LycEpW7GYQmZ3TexnKMkWp1FQa9StqLqx4lDYmwi2qpW1ENbUUraq1AItqqQVkMFZO9ekAUFZSCuhQrp4rIGFW4hStxCEtrKVtZABhmIU7MQgra6lZXSoYdp4hWG10CZXVhldS4lJhj1ySliw4S0gjkZWH9JdqGQ1j3tI9oCQOIIIWfbWcLhxniDB62WcmkLWeo43bNOkQKhjey4W55BDavpiwTutm9iTY+F5WDq4t7wA57jHEk+ShEaLNzRWphPbe2XVqhcCQ23ZLiQCBmOCHDGPGRyVeoRxVd5U3YrLVfFvcXFx9vPxmw0uuVaAdVyCrCxwzajpDg05gOn5BX8PRq0hG5v70yR2raW4c1XqYUPEyekQe6+SsYZxbTIc5xbn/MP+M2K86TtGaG0XtmH0wORLr55g6n5plfMPayDfKB2QbSYy+ivV8PRrNbu1d4gWJIa8cnAm4vmh9TDVKJO+JaOyY+YOQTg4y/vwVpY0bQc2WuFiNRvZ6zn3q7g/Vlu8IE+1BgzFj8lT9cwsJAcZ5AgLsEae8XFxBtkIEgRJJlTOCrx4GmEW4jcBF3Re17aXH3ZD91jiT284IF7c11UOJ7D4F+Z77Qm4fDkntVNZjiesJRgoq7B+SzhSwVGkOex2k6HnqMlZp1hLiRv6zuwb+0THvc5QrF1AJN97KZvGWvJV6+McQJNgLEZ24EXn6K+3qGpaQgNosBiHDlPxsmV9pC8AC/WOtrITUqkwSYvncSTonOqgZXdq7TpxOi2j09sbzzfsldVkk3uLmwMXEHzVdzj+1lGXpN9dsOnS3MmyZzyTJP311S7yg3koct4wjHZCJw5ODlX3k6VQiy1ykDlVa5O30BRaD0oeqocnh6YFkVEu+qwel3kCLQqJ7aiqByka9Ay6yopm1FQFRPFRAwgKilY9DQ9SsqoAK06inbVQplVStrIAqekeFc7+I2DuiCMjHHms612l55rXmogO18HHaa2BrcR4LLJC/IFYGVG56bTfH0+ildfLP5LjfhlIgJnko+nkpHtTRPHvRYDGuvkkUknl4LlVjsL1s/vimsed0XOnxSLl55I3GiN0ixvcWKPPM06RNzuxJuYlcuSyf0mkdmV8W0NpuLRHZGVtRwQ+o0CY5fArlyMexLG1HG3X5hQYlxGRi2ltUi5ax3KexDWPaPd8Ujc+4/8AkkXLaOxkQk9lvf8AFMSLl34v5QZxXLly1EKlSLkAKE8LlyAFCVKuQA5cEi5ADwnNXLkAPCcFy5MBzVI1cuQIkCe1cuQMlanhcuQMeCoMeP4buiVchiMlTNgeSI0dFy5cM9iiUeyOhUTPa++CRcsojEd7vQpVy5DA/9k="
							alt="
						Porsche và Subaru có dịch vụ khách hàng tốt nhất">
						<div class="highlight-news-item__content">
							<h3 class="highlight-news-item__title">Porsche và Subaru có dịch vụ khách hàng tốt nhất</h3>
							<div class="highlight-news-item__info">
								<div class="highlight-news-item__meta">
									<div class="highlight-news-item__category">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
												stroke="white" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>
											Xe hay
										</span>
									</div>
									<div class="highlight-news-item__date">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
												stroke="white" stroke-miterlimit="10" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
										<span>16/03/2025</span>
									</div>
								</div>
								<button class="highlight-news-item__button">Xem ngay</button>
							</div>
						</div>
					</a>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</div>

<!-- Kiến thức xe hơi --  -->
<!--  -->
<section class="secSpace">
	<div class="container">
		<h1 class="car-knowledge__title"><?php _e("Kiến thức xe hơi"); ?></h1>
		<!--  -->
		<div class="row g-4">
			<?php for ($i = 0; $i < 4; $i++): ?>
				<div class="col-lg-3">
					<a href="#" class="related-news">
						<img class="related-news__image"
							src="data:image/jpeg;base64,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"
							alt="
						Porsche và Subaru có dịch vụ khách hàng tốt nhất">
						<div class="related-news__content">
							<h3 class="related-news__title">Porsche và Subaru có dịch vụ khách hàng tốt nhất</h3>
							<div class="related-news__info">
								<div class="related-news__meta">
									<div class="related-news__category">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
												stroke="white" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>
											Xe hay
										</span>
									</div>
									<div class="related-news__date">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
												stroke="white" stroke-miterlimit="10" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
										<span>16/03/2025</span>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?php endfor; ?>
		</div>

		<!--  -->
		<div class="row g-4">
			<?php for ($i = 0; $i < 6; $i++): ?>
				<div class="col-lg-4">
					<a href="#" class="highlight-news-item">
						<img class="highlight-news-item__image"
							src="data:image/jpeg;base64,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"
							alt="
						Porsche và Subaru có dịch vụ khách hàng tốt nhất">
						<div class="highlight-news-item__content">
							<h3 class="highlight-news-item__title">Porsche và Subaru có dịch vụ khách hàng tốt nhất
							</h3>
							<div class="highlight-news-item__info">
								<div class="highlight-news-item__meta">
									<div class="highlight-news-item__category">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
												stroke="white" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>
											Xe hay
										</span>
									</div>
									<div class="highlight-news-item__date">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
												stroke="white" stroke-miterlimit="10" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
										<span>16/03/2025</span>
									</div>
								</div>
								<button class="highlight-news-item__button">Xem ngay</button>
							</div>
						</div>
					</a>
				</div>
			<?php endfor; ?>
		</div>
</section>

<!--  -->
<div class="secSpace">
	<div class="container">
		<h2 class="highlight-news__title">
			<?php _e("Tin Nổi bật"); ?>
		</h2>
		<div class="row">
			<?php for ($i = 0; $i < 4; $i++): ?>
				<div class="col-lg-3">
					<a href="#" class="related-news">
						<img class="related-news__image"
							src="data:image/jpeg;base64,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"
							alt="
						Porsche và Subaru có dịch vụ khách hàng tốt nhất">
						<div class="related-news__content">
							<h3 class="related-news__title">Porsche và Subaru có dịch vụ khách hàng tốt nhất</h3>
							<div class="related-news__info">
								<div class="related-news__meta">
									<div class="related-news__category">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
												stroke="white" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>
											Xe hay
										</span>
									</div>
									<div class="related-news__date">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
												stroke="white" stroke-miterlimit="10" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
										<span>16/03/2025</span>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</div>

<?php
get_footer();
