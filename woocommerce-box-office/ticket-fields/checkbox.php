<?php echo esc_html( $before_field ); ?>
	<label class="<?php echo esc_attr( $label_class ); ?>" for="<?php echo esc_attr( $id ); ?>">
		<?php echo esc_html( $label ); ?>
	</label>
	<?php foreach ( $options as $index => $option ) : ?>
		<label for="<?php echo esc_attr( sprintf( '%s_%d', $id, $index + 1 ) ); ?>" class="ticket-field-option-label">
			<input
				type="checkbox"
				name="<?php echo esc_attr( sprintf( '%s[]', $name ) ); ?>"
				class="<?php echo esc_attr( $input_class ); ?>"
				value="<?php echo esc_attr( $option ); ?>"
				id="<?php echo esc_attr( sprintf( '%s_%d', $id, $index + 1 ) ); ?>"
				<?php echo $required ? 'required' : ''; ?>
				<?php checked( is_array( $value ) ? in_array( $option, $value, true ) : $value === $option ); ?>
				<?php disabled( $disabled ); ?>>
			<?php echo esc_html( $option ); ?>
		</label>
	<?php endforeach; ?>
<?php echo esc_html( $after_field ); ?>
